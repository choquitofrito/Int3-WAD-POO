<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User and Post Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .user, .post {
            background: #f4f4f4;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
        }
        .post {
            margin-left: 30px;
            border-left: 3px solid #007bff;
        }
        h1, h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <h1>User and Post Management System</h1>
    
    <?php 
    require_once "./classes/User.php";
    require_once "./classes/Post.php";

    try {
        // Create users
        $user1 = new User("Alice Johnson", "alice@example.com");
        $user2 = new User("Bob Smith", "bob@example.com");

        // Create posts
        $post1 = new Post("My First Post", 
            "This is a test post to demonstrate the User and Post classes in PHP. This is a longer text to demonstrate the resume functionality.", 
            $user1);
        
        $post2 = new Post("Another Post", 
            "This is another post by the same user to show multiple posts per user.", 
            $user1);
        
        $post3 = new Post("Bob's First Post", 
            "Hello everyone! This is Bob's first post on this platform.", 
            $user2);

        // Display users and their posts
        $users = [$user1, $user2];
        
        foreach ($users as $user) {
            echo "<div class='user'>";
            echo "<h2>" . htmlspecialchars($user->getNom()) . "</h2>";
            echo "<p>Email: " . htmlspecialchars($user->getEmail()) . "</p>";
            
            $posts = $user->getPosts();
            if (count($posts) > 0) {
                echo "<h3>Posts (" . count($posts) . ")</h3>";
                foreach ($posts as $post) {
                    echo "<div class='post'>";
                    echo "<h4>" . htmlspecialchars($post->getTitre()) . "</h4>";
                    echo "<p>" . nl2br(htmlspecialchars($post->getTexte())) . "</p>";
                    echo "<small>Posted on: " . $post->getDateCreation()->format('Y-m-d H:i:s') . "</small>";
                    echo "<p><em>Summary: " . htmlspecialchars($post->getResume(50)) . "</em></p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No posts yet.</p>";
            }
            echo "</div>";
        }

        // Demonstrate post modification
        $post1->setTitre("Updated: My First Post");
        $post1->setTexte("This post has been updated to demonstrate the setter methods.");

        echo "<h2>Updated Post</h2>";
        echo "<div class='post'>";
        echo "<h3>" . htmlspecialchars($post1->getTitre()) . "</h3>";
        echo "<p>" . nl2br(htmlspecialchars($post1->getTexte())) . "</p>";
        echo "<p>Author: " . htmlspecialchars($post1->getAuteur()->getNom()) . "</p>";
        echo "</div>";

    } catch (Exception $e) {
        echo "<div style='color: red; padding: 10px; border: 1px solid red;'>";
        echo "Error: " . $e->getMessage();
        echo "</div>";
    }
    ?>

</body>
</html>
