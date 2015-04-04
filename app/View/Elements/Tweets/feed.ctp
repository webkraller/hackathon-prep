<head>
<style>
.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  margin-bottom:1em;
  cursor:pointer;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
.tweet_div{
  border-bottom:1px solid black;
  padding-bottom:1em;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
</head>
<div id="tweets">
<?php
$tweets = array("https://twitter.com/elimcgowan/status/584235719574626305", "https://twitter.com/toriwatsonphoto/status/584212483424067584", "https://twitter.com/BobCarlin1/status/584147217260359680");
foreach($tweets as $tweet){
  echo '<div class="tweet_div" data-url="'.$tweet.'" style="margin:auto;display:block;width:500px; margin-bottom:3em"></div>';
}
?>
</div>
<script>
$(document).ready(function(){
  $(".tweet_div").each(function(){
    var tweet = $(this);
        tweet.show();
        var url = tweet.data("url");
        $.ajax({
            url: "https://api.twitter.com/1/statuses/oembed.json?url="+url,
            dataType: "jsonp",
            success: function(data){
                tweet.html(data.html);
            $("<a id='positive_reviews' class='btn'>Up</a>")
            .appendTo(tweet)
            .position({
                my: 'left bottom',
                at: 'left bottom',
                of: tweet,
                offset: '0'
            });
            $("<a id='negative_reviews' class='btn'>Down</a>")
            .appendTo(tweet)
            .position({
                my: 'right bottom',
                at: 'right bottom',
                of: tweet,
                offset: '0'
            });
            });//end of btn
            }//End of success
        });
    });
  
})
</script>

