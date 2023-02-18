<?php
session_start();
require "_conf.php";
require "_conn.php";

$action = isset($_GET['action']) ? $_GET['action'] : 'home';
$param = isset($_GET['param']) ? $_GET['param'] : '0';

$tracks = "";

if ($action == "album") {
    if ($param != 0) {
        $row = $conn->query("select * from album left join artist on album.ArtistId = artist.ArtistId where AlbumId={$param}")->fetchAll();

        $mtitle = "Album";

        $mlist = "";

        foreach ($row as $list) {
            $mlist .= "
                <span style=\"display:block\">
                    <strong>AlbumId: </strong> " . $list["AlbumId"] . "
                </span>
                <span style=\"display:block\">
                    <strong>Title: </strong> " . $list["Title"] . "
                </span>
                <span style=\"display:block\">
                    <strong>Artist: </strong> <a href=\"" . $dir . "member/artist/" . $list["ArtistId"] . "\">" . $list["Name"] . "</a>
                </span>";
        }

        include "details.php";
    } else {
        $row = $conn->query("select * from album order by Title")->fetchAll();

        $mtitle = "Albums";

        $mlist = "";
        foreach ($row as $list) {
            $mlist .= "<div class=\"col-12 col-sm-6 col-md-4 col-lg-3 p-3\">
            <a href=\"" . $dir . "member/" . $action . "/" . $list["AlbumId"] . "\" style=\"color: #333;text-decoration: none;\">
                <div class=\"px-3\">
                    <div class=\"card p-4 card-link-shadow-hover\" style=\"overflow: hidden;\">
                        <h6 class=\"text-success pt-3\">" . $list["Title"] . "</h6>
                    </div>
                </div>
            </a>
        </div>";
        }

        include "listing.php";
    }
} else if ($action == "artist") {
    if ($param != 0) {
        $row = $conn->query("select * from artist where ArtistId={$param}")->fetchAll();

        $mtitle = "Artist";

        $mlist = "";

        foreach ($row as $list) {
            $mlist .= "
                <span style=\"display:block\">
                    <strong>AlbumId: </strong> " . $list["ArtistId"] . "
                </span>
                <span style=\"display:block\">
                    <strong>Album: </strong> " . $list["Name"] . "
                </span>";
        }

        include "details.php";
    } else {
        $row = $conn->query("select * from artist order by Name")->fetchAll();

        $mtitle = "Albums";

        $mlist = "";
        foreach ($row as $list) {
            $mlist .= "<div class=\"col-12 col-sm-6 col-md-4 col-lg-3 p-3\">
            <a href=\"" . $dir . "member/" . $action . "/" . $list["ArtistId"] . "\" style=\"color: #333;text-decoration: none;\">
                <div class=\"px-3\">
                    <div class=\"card p-4 card-link-shadow-hover\" style=\"overflow: hidden;\">
                        <h6 class=\"text-success pt-3\">" . $list["Name"] . "</h6>
                    </div>
                </div>
            </a>
        </div>";
        }

        include "listing.php";
    }
} else if ($action == "genre") {
    if ($param != 0) {
        $row = $conn->query("select * from genre where GenreId={$param}")->fetchAll();

        $mtitle = "Genre";

        $mlist = "";

        foreach ($row as $list) {
            $mlist .= "
                <span style=\"display:block\">
                    <strong>GenreId: </strong> " . $list["GenreId"] . "
                </span>
                <span style=\"display:block\">
                    <strong>Genre: </strong> " . $list["Name"] . "
                </span>";
        }

        include "details.php";
    } else {
        $row = $conn->query("select * from genre order by Name")->fetchAll();

        $mtitle = "Genre";

        $mlist = "";
        foreach ($row as $list) {
            $mlist .= "<div class=\"col-12 col-sm-6 col-md-4 col-lg-3 p-3\">
            <a href=\"" . $dir . "member/" . $action . "/" . $list["GenreId"] . "\" style=\"color: #333;text-decoration: none;\">
                <div class=\"px-3\">
                    <div class=\"card p-4 card-link-shadow-hover\" style=\"overflow: hidden;\">
                        <h6 class=\"text-success pt-3\">" . $list["Name"] . "</h6>
                    </div>
                </div>
            </a>
        </div>";
        }

        include "listing.php";
    }
} else if ($action == "mediatype") {
    if ($param != 0) {
        $row = $conn->query("select * from mediatype where MediaTypeId={$param}")->fetchAll();

        $mtitle = "Media Type";

        $mlist = "";

        foreach ($row as $list) {
            $mlist .= "
                <span style=\"display:block\">
                    <strong>MediaTypeId: </strong> " . $list["MediaTypeId"] . "
                </span>
                <span style=\"display:block\">
                    <strong>Media Type: </strong> " . $list["Name"] . "
                </span>";
        }

        include "details.php";
    } else {
        $row = $conn->query("select * from mediatype order by Name")->fetchAll();

        $mtitle = "Media Types";

        $mlist = "";
        foreach ($row as $list) {
            $mlist .= "<div class=\"col-12 col-sm-6 col-md-4 col-lg-3 p-3\">
            <a href=\"" . $dir . "member/" . $action . "/" . $list["MediaTypeId"] . "\" style=\"color: #333;text-decoration: none;\">
                <div class=\"px-3\">
                    <div class=\"card p-4 card-link-shadow-hover\" style=\"overflow: hidden;\">
                        <h6 class=\"text-success pt-3\">" . $list["Name"] . "</h6>
                    </div>
                </div>
            </a>
        </div>";
        }

        include "listing.php";
    }
} else if ($action == "playlist") {
    if ($param != 0) {
        $row = $conn->query("select * from playlist where PlaylistId={$param}")->fetchAll();

        $mtitle = "Play List";

        $mlist = "";

        foreach ($row as $list) {
            $mlist .= "
                <span style=\"display:block\">
                    <strong>PlaylistId: </strong> " . $list["PlaylistId"] . "
                </span>
                <span style=\"display:block\">
                    <strong>Play List: </strong> " . $list["Name"] . "
                </span>";
        }

        $row = $conn->query("select t.Name as TrackName, t.TrackId as ID from playlisttrack p left join track t on p.TrackId = t.TrackId left join album a on t.AlbumId=a.AlbumId left join mediatype m on t.MediaTypeId=m.MediaTypeId left join genre g on t.GenreId=g.GenreId  where p.PlaylistId=$param order by t.Name;")->fetchAll();

        $tracks .= "<div class=\"row py-5\">
        <div class=\"col-12 col-md-6 \">
            <div class=\"px-3\">
                <h6 class=\"text-success pt-3\">Play List Tracks</h6>
                <hr>";
        foreach ($row as $track) {
            $tracks .= "<p class=\"text-secondary\">
                        <a class=\"text-secondary\" href=\"{$dir}member/track/" . $track["ID"] . "\" style=\"text-decoration: none;\">
                        " . $track["TrackName"] . "
                        </a></p>";
        }
        $tracks .= "
                </div>
            </div>

        </div>";

        include "details.php";
    } else {
        $row = $conn->query("select * from playlist order by Name")->fetchAll();

        $mtitle = "Play List";

        $mlist = "";
        foreach ($row as $list) {
            $mlist .= "<div class=\"col-12 col-sm-6 col-md-4 col-lg-3 p-3\">
            <a href=\"" . $dir . "member/" . $action . "/" . $list["PlaylistId"] . "\" style=\"color: #333;text-decoration: none;\">
                <div class=\"px-3\">
                    <div class=\"card p-4 card-link-shadow-hover\" style=\"overflow: hidden;\">
                        <h6 class=\"text-success pt-3\">" . $list["Name"] . "</h6>
                    </div>
                </div>
            </a>
        </div>";
        }

        include "listing.php";
    }
} else if ($action == "track") {
    if ($param != 0) {
        $row = $conn->query("select t.Name as TrackName, t.TrackId as ID, a.Title as AlbumName, m.Name as MediaName, g.Name as GenreName from track t left join album a on t.AlbumId=a.AlbumId left join mediatype m on t.MediaTypeId=m.MediaTypeId left join genre g on t.GenreId=g.GenreId  where t.TrackId=$param order by t.Name;")->fetchAll();

        $mtitle = "Track";

        $mlist = "";

        foreach ($row as $list) {
            $mlist .= "
                <span style=\"display:block\">
                    <strong>TrackId: </strong> " . $list["ID"] . "
                </span>
                <span style=\"display:block\">
                    <strong>Track: </strong> " . $list["TrackName"] . "
                </span>
                <span style=\"display:block\">
                    <strong>Album: </strong> " . $list["AlbumName"] . "
                </span>
                <span style=\"display:block\">
                    <strong>Media Type: </strong> " . $list["MediaName"] . "
                </span>
                <span style=\"display:block\">
                    <strong>Genre: </strong> " . $list["GenreName"] . "
                </span>";
        }

        include "details.php";
    } else {
        $row = $conn->query("select * from track order by Name")->fetchAll();

        $mtitle = "Tracks";

        $mlist = "";
        foreach ($row as $list) {
            $mlist .= "<div class=\"col-12 col-sm-6 col-md-4 col-lg-3 p-3\">
            <a href=\"" . $dir . "member/" . $action . "/" . $list["TrackId"] . "\" style=\"color: #333;text-decoration: none;\">
                <div class=\"px-3\">
                    <div class=\"card p-4 card-link-shadow-hover\" style=\"overflow: hidden;\">
                        <h6 class=\"text-success pt-3\">" . $list["Name"] . "</h6>
                    </div>
                </div>
            </a>
        </div>";
        }

        include "listing.php";
    }
} else if ($action == "home") {
    $row = $conn->query("select * from playlist order by Name limit 0,10")->fetchAll();

    $mplist = "";
    foreach ($row as $plist) {
        $mplist .= "<p class=\"text-secondary\">
        <a class=\"text-secondary\" href=\"" . $dir . "member/playlist/" . $plist["PlaylistId"] . "\">
            " . $plist["Name"] . "
        </a>
    </p>";
    }

    $row = $conn->query("select * from artist order by Name limit 0,10")->fetchAll();

    $malist = "";
    foreach ($row as $alist) {
        $malist .= "<p class=\"text-secondary\">
        <a class=\"text-secondary\" href=\"" . $dir . "member/artist/" . $alist["ArtistId"] . "\">
            " . $alist["Name"] . "
        </a>
    </p>";
    }

    include "mhome.php";
}
