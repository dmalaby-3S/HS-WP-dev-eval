<?php
// Include necessary files
require_once 'config.php';
require_once 'functions.php';

// Start the session if needed
session_start();

// Include the header
include 'header.php';
?>

<!-- Main content -->
<main>
    <h1>Welcome to My Website</h1>
    <?php
    // PHP logic for the main content
    foreach ($latestPosts as $post) {
        echo "<article>";
        echo "<h2>" . htmlspecialchars($post['title']) . "</h2>";
        echo "<p>" . htmlspecialchars($post['excerpt']) . "</p>";
        echo "</article>";
    }
    ?>
</main>

<?php
// Include the footer
include 'footer.php';
?>