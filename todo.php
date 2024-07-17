<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "todo";
    public $conn;

    public function render() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        return $this->conn;
    }
}

class Task {
    private $conn;
    private $table = "todos";
    public $id;
    public $title;
    public $description;
    public $status;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO $this->table (title, description, status) VALUES (?, ?, 'pending')";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ss", $this->title, $this->description);
        return $stmt->execute();
    }

    public function read() {
        $query = "SELECT * FROM $this->table ORDER BY created_at DESC";
        return $this->conn->query($query);
    }

    public function update() {
        $query = "UPDATE $this->table SET title = ?, description = ?, status = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssi", $this->title, $this->description, $this->status, $this->id);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM $this->table WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id);
        return $stmt->execute();

    }
}

$database = new Database();
$db = $database->render();
$task = new Task($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['create'])) {
        $task->title = $_POST['title'];
        $task->description = $_POST['description'];
        $task->create();
    } elseif (isset($_POST['update'])) {
        $task->id = $_POST['id'];
        $task->title = $_POST['title'];
        $task->description = $_POST['description'];
        $task->update();
    } elseif (isset($_POST['delete'])) {
        $task->id = $_POST['id'];
        $task->delete();
    }
}

$tasks = $task->read();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            margin-top: 10px;
            background: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: #f9f9f9;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
        }
        li form {
            display: flex;
            flex-direction: column;
        }
        li form button {
            background: #007bff;
        }
        li form button[name="delete"] {
            background: #dc3545;
        }
        li form button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Task Manager</h1>
        <form method="post">
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="description" placeholder="Description" required></textarea>
            <button type="submit" name="create">Create Task</button>
        </form>
        <h2>Tasks</h2>
        <ul>
            <?php while ($row = $tasks->fetch_assoc()): ?>
                <li>
                    <form method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="text" name="title" value="<?php echo $row['title']; ?>" required>
                        <textarea name="description" required><?php echo $row['description']; ?></textarea>
                        <button type="submit" name="update">Update</button>
                        <button type="submit" name="delete">Delete</button>
                    </form>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</body>
</html>
