<?php
include('check_login.php');

include('header.php');
?>

<p><strong>Instructions on using Ad Finder Pro (AFP)</strong></p>
<p>The fist thing you'll want to do is Add a new campaign. There, you will enter the Campaign Name, choose the cities you want to search, add the keyword(s) to search for, and if you want, the number of days to search back from.You can add as many campaigns as you want, but the more you add, the more resources you'll use and time to run PHP will increase. If PHP times out, an erro_log will be created with teh error. You may want to check with your host to ask if they can increase the execution time for PHP. Normally, it's set to 90 seconds, which should be plenty of time.</p>
<p>After you add your campaigns, you can view them by clicking on View Campaigns.</p>
<p><strong>Setting up CRON</strong></p>
<p>In order for AFP to run automatically, you need to set up a cron job. If you need help setting up a cron job, search  Google or ask your host.</p>
<p>Example cron:  0 * * * * php  /root-to-your-account/path-to-afp/cron.php</p>
<ul>
  <li>The example above will set the cron to run every hour.</li>
</ul>
<p><strong><a name="tips" id="tips"></a>AFP Tips</strong></p>
<ul>
  <li>AFP will run according to how often you set the cron job to run. If new ads are <em><strong><u>not</u></strong></em> found, you won't receive an email.<br />
    <br />
  </li>
  <li>Every time AFP runs, it will collect all of the ads and generate a single email to you with a list of all the ads, by location and category.<br />
    <br />
  </li>
  <li>Sometimes, you'll receive ads that don't seem to have any relevance to your keywords what-so-ever. These ads are posted with hundreds of general or popular keywords in order for them to appear in search results. Unfortunately, AFP will pick these up, too. Just overlook them and click on relevant ads.<br />
    <br />
  </li>
  <li>You can search by city by entering your city as the keyword search. So, if you live in Providence, RI, then enter &quot;providence&quot; as the keyword and only ads listed in Providence will be sent.
    <ul>
      <li>This depends on if the ad poster entered the city within the ad.</li>
    </ul>
  </li>
  <li>You can use &quot;quotes&quot; to search for a specific phrase. 
    <ul>
      <li>Example: &quot;dell laptop&quot;        </li>
    </ul>
  </li>
  <li>You can exclude keywords by entering a minus sign before a keyword
    <ul>
      <li>Example: ipod touch -8gb (In this case, any ad found for an <strong>8gb</strong> ipod touch will not be added, but 32g and 64g should be.)        </li>
    </ul>
  </li>
  <li>It's better to use one or two keywords to get the best results. More keywords will give you more results, because AFP will be search ads with ALL of those keywords.</li>
  <li>Pausing a campaign will exclude that keyword search from being checked.</li>
  <li>Resetting a campain will completely start it over, checking for ads in previous days (if set), not just new ads.</li>
</ul>
<?php
include('footer.php');
?>