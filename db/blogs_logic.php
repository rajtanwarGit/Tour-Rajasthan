<?php



// Get data to display on blogs page
$limit = 6;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$query = $conn->query("SELECT * FROM blog_data ORDER BY time DESC  LIMIT $start, $limit");

while ($rows = mysqli_fetch_assoc($query)) {
    $datetime = $rows['time'];
}


//Get Time Ago
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}



//Pagination
$queryrow = $conn->query("SELECT * FROM blog_data");
$total = mysqli_num_rows($queryrow);
$pages = ceil($total / $limit);
$previous = $page - 1;
$next = $page + 1;


// Create a new post
if (isset($_REQUEST['new_post'])) {
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];


    $sql = "INSERT INTO blog_data(title, img, content) VALUES('$title', '$NewImageName', '$content')";
    mysqli_query($conn, $sql);

    echo $sql;

    header("Location: blog/blogs.php?info=added");
    exit();
}

// Get post data based on id
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM blog_data WHERE id = $id";
    $query = mysqli_query($conn, $sql);
}

// Delete a post
if(isset($_REQUEST['delete'])){
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM blog_data WHERE id = $id";
    mysqli_query($conn, $sql);

    header("Location: blog/blogs.php?info=deleted");
    exit();
}

// Update a post
if(isset($_REQUEST['update'])){
    $id = $_REQUEST['id'];
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];

    $sql = "UPDATE blog_data SET title = '$title', content = '$content' WHERE id = $id";
    mysqli_query($conn, $sql);

    header("Location: blog/blogs.php?info=updated");
    exit();
}


?>