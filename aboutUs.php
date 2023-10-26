<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");

if (isset($_GET["id"])) {
    $post = selectOne("posts", ["id" => $_GET["id"]]);

}
$topics = selectAll('topics');
$posts = selectAll("posts", ["published" => 1]);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- icons used and taken from: FontAwesome-->
    <script src="https://kit.fontawesome.com/aa96e6185d.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Roboto+Slab&display=swap" rel="stylesheet">

    <!-- CSS File-->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>
        About Us | EventShare
    </title>

</head>

<body>

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!-- Page Wrapper-->
    <div class="page-wrapper">

        <!--Content-->
        <div class="content clearfix">

            <!-- Main Content-->
            <div class="main-content-wrapper">
                <div class="main-content single">
                    <h1 class="post-title">
                        About Us
                    </h1>

                    <div class="post-content">
                        <p>
                        EventShare is a dynamic online platform designed to foster community engagement and promote local events in Brunei. Catering to the diverse interests of users, EventShare serves as a comprehensive hub for discovering and sharing upcoming events, ranging from cultural festivals and art exhibitions to sports tournaments and charity fundraisers. With its user-friendly interface, the website enables individuals to explore a rich tapestry of social gatherings and activities, fostering a vibrant sense of community involvement and connectivity within Brunei. 
                        </p>

                        <p>
                        Furthermore, EventShare encourages users to actively participate in the local event scene by providing a seamless mechanism for event organizers to publicize their upcoming gatherings. By facilitating event promotion, the website serves as a catalyst for enhancing event visibility and attendance, thereby fostering a thriving events culture within the Bruneian community. Event organizers can easily create and manage event listings, customize event details, and reach a broader audience, ensuring that every noteworthy occasion receives the attention it deserves.
                        </p>

                        <p>
                        In addition to its event-sharing functionality, EventShare also offers an innovative blogging feature that allows users to document and share their unique experiences and explorations of various places within Brunei. Through these personalized narratives, users can provide firsthand accounts of their encounters with local attractions, hidden gems, and cultural landmarks, fostering a deeper appreciation for the rich heritage and diverse landscapes that define Brunei. By facilitating the exchange of insightful perspectives and recommendations, the website cultivates a virtual community of enthusiastic storytellers and explorers, inspiring others to embark on their own adventures and discover the wonders of Brunei
                        </p>

                        <p>
                        Overall, EventShare serves as an indispensable resource for individuals seeking to immerse themselves in the vibrant tapestry of Brunei's cultural landscape. Whether one is eager to participate in upcoming events, share their own experiences, or gain valuable insights into the local event scene, this website is poised to enrich the social fabric of Brunei by promoting inclusivity, connectivity, and a shared passion for exploration and community engagement.
                        </p>
                    </div>
                </div>
            </div>
            <!--// Main Content-->

            <!--SideBar-->
            <div class="sidebar single">

                <div class="section-popular">
                    <h2 class="section-title">Popular Posts</h2>
                    <?php foreach ($posts as $p): ?>
                        <div class="post clearfix">
                            <img src="<?php echo BASE_URL . "/assets/images/" . $p["image"]; ?>" alt="ImgNotWork">
                            <a href="single.php?id=<?php echo $p["id"]; ?>" class="title">
                                <h4>
                                    <?php echo $p["title"]; ?>
                                </h4>
                            </a>
                        </div>
                    <?php endforeach; ?>

                </div>

                <div class="section topics">
                    <h2 class="section-title">Types of Posts</h2>
                    <ul>
                        <li>
                            <?php foreach ($topics as $topic): ?>
                                <!-- t_id = topic id -->
                                <a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>">
                                    <?php echo $topic["name"]; ?>
                                </a>
                            <?php endforeach; ?>
                        </li>

                    </ul>
                </div>

            </div>
            <!--//Sidebar-->

        </div>
        <!--//Content-->
    </div>
    <!--//Page Wrapper-->

    <!-- TODO: include footer here -->
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

    </div>
    <!-- JQuery (placed at the end for performance reasons)-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Slick Carousel-->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Custom Script-->
    <script src="assets/js/scripts.js"></script>
</body>

</html>