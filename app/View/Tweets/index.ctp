<div class="panewrap">
<div id="pane">


  <div class="form-group has-success has-feedback" id="tweetinput">
  <form >
    <label class="control-label" for="urlinput">Bad Tweet Url</label>
      <input type="text" class="form-control" id="urlinput" aria-describedby="inputSuccess3Status">
      <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
      <button class="btn btn-primary btn-sm" id="submiturl">Submit</button>
  </form>
  </div>

</div>
</div>
<a href="javascript:var tweets=document.querySelectorAll('div.tweet, div.js-tweet');var myButtonText = 'This Tweet Sucks';if(tweets!==null){for(t=0;t<tweets.length;t++) {var existingButtons = tweets[t].querySelectorAll('a.thisCustomButtonElement');if(existingButtons !==null){for(b=0;b<existingButtons.length;b++){existingButtons[b].parentNode.removeChild(existingButtons[b]);}}if(tweets[t].dataset.tweetId) {date = tweets[t].querySelector('span.js-short-timestamp');var linkdiv = document.createElement('a');linkdiv.setAttribute('href','http://hackatron.no-ip.org/Tweets/submit/'+tweets[t].dataset.tweetId+'/'+tweets[t].dataset.screenName+'/'+date.dataset.time);linkdiv.setAttribute('class','thisCustomButtonElement');linkdiv.setAttribute('target','_blank');linkdiv.setAttribute('style','display:block; color:purple; font-weight:bold; padding:.125em .25em; background-color:rgb(200,20,0); color:white; border-radius:.5em; text-align:center; width:50px; font-size:12px; margin:.5em .5em; box-shadow:0em .125em .25em rgba(0,0,0,.5);float:right;');linkdiv.innerHTML = myButtonText;tweets[t].insertBefore(linkdiv,tweets[t].firstChild);} else {alert('Click the "'+myButtonText+'" button below any Tweet to flag it.');}}}">Drag this link to your bookmark bar to submit tweets</a>
