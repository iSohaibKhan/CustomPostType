# Custom Post Types (WordPress)
<p><b>Custom Post Types</b> are specific post types that have been added to <b>WordPress</b> using custom code or plugins. The idea is that you may want to add additional functionality to your site but don't want to add everything as a standard post.</p>
<p>By following the instructions you can create your own <b>Custom Post Type</b> in your <b>WordPress</b> dashboard with out any plugin.</p>
<p>The <b>PHP</b> code in this repository is the new function that you would create by adding it to your <b>functions.php</b> file, copy it from here & paste it in your relative file.</p>
<h2>Directory Path</h2>
<ul>
  <li><b>root-folder -> app -> public -> wp-content -> themes -> your-theme -> functions.php</b></li>
</ul>
<h2>Instructions</h2>
<ul>
  <li><b>Line #5:</b> In the first attribute of <b>register_post_type()</b> function you can name it whatever you want instead of <b>my_project</b> but always in lowercase. "<b><em>register_post_type( 'my_project', array());</em></b>"</li> 
  <li><b>Line #8:</b> Here in this line of code you'll select the name of your <b>Custom Post Type</b> in name & singular name attributes, which will displayed in your <b>WordPress</b> dashboard, instead of <b>Projects</b> your can name it according to your <b>CPT</b>. "<b><em>'labels' => array( 'name' => __( 'Projects' ), 'singular_name' => __( 'Project' )),</em></b>"</li>
  <li><b>Line #11:</b> Here in this line you will select the slug of your <b>Custom Post Type</b> (lowercase), <b><em>'rewrite' => array('slug' => 'projects'),</em></b> instead of <b>projects</b> you can name it as per your liking.</li>
</ul>
<h3>NOTE</h3>
<p>If after registering your post type by using this code if you create an item through dashboard then it will give you the link & if you open it, & it shows <b>404 Error</b> then just don't panic, go to your settings select the permalinks and don't change anything in there just make the save changes then you're good to go. This usually happens when ever the slug is different from your name of the <b>Custom Post Tyeps</b> or if you change the slug in the future.</p>

