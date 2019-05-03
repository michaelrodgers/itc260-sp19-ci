<?php
//views/pics/index.php
$this->load->view($this->config->item('theme').'header');
?>

 <h2><?php echo $title; ?></h2>

<a href='pics/Nova' style="padding-right: 5em">Nova</a><t>
<a href='pics/Fortnite' style="padding-right: 5em">Fortnite</a>
<a href='pics/Democracy' style="padding-right: 5em">Democracy</a>
<a href='pics/BlackPanther' style="padding-right: 5em">Black Panther</a>
<a href='pics/BohemianRhapsody' style="padding-right: 5em">Bohemian Rhapsody</a>
<a href='pics/Bitcoin' style="padding-right: 5em">Bitcoin</a>
	
<pre style="clear:both;"></pre>
	
<?php foreach($pics as $pic): ?>

<?php
 	$size = 'm';
    $photo_url = 'http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';
     echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";

?>

<?php endforeach;	

$this->load->view($this->config->item('theme') . 'footer');

?>