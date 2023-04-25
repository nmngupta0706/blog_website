<?php
https: //www.myswitzerland.com/en-in/experiences/summer-autumn/excursions/?gclid=CjwKCAjw3POhBhBQEiwAqTCuBkoDcqzqCl_uhSl9zpn44Cm2a0gPdH8YD_zkM14wsiNzDPhyktQQiBoCA0gQAvD_BwE
$conn = mysqli_connect("localhost", "root", "", "travel_blogs");
// die("connection failed");
if (!$conn) {
    die("connection failed");
} else {
    $place = $_GET['place'];
    $sql = "SELECT * from visiting_places where name='$place'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'] + 1;
    $id = $row['id'];
    $sql = "UPDATE visiting_places SET count = $count WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        switch ($place) {
            case 'switzerland':
                return header("Location: https://www.myswitzerland.com/en-in/experiences/summer-autumn/excursions/?gclid=CjwKCAjw3POhBhBQEiwAqTCuBkoDcqzqCl_uhSl9zpn44Cm2a0gPdH8YD_zkM14wsiNzDPhyktQQiBoCA0gQAvD_BwE");
                break;
            case 'london':
                return header("Location: https://www.visitlondon.com/things-to-do/sightseeing/london-attraction/top-ten-attractions");

            case 'colosseum':
                return header("Location: https://www.tripadvisor.in/Attractions-g187791-Activities-Rome_Lazio.html");

            case 'paris':
                return header("Location: https://www.timeout.com/paris/en/attractions/best-paris-attractions");

            case 'africa':
                return header("Location: https://www.roadaffair.com/top-safari-destinations-in-africa/");

            case 'america':
                return header('Location: https://www.planetware.com/usa/best-places-to-visit-in-the-united-states-us-ny-21.htm');
            default:
                return header("Location: http://localhost/blogethon/style.html");
                break;
        }
    } else {
        echo "Data not inserted successfully.";
    }
}
