<? function displayElement($element,$i): void{ ?>
                    <div>
                        <p><?= $element['title'].' '.$element['content'].' '.$element['author'].' '.$element['date'].' '?></p>
                        <ul>
			                <?php
				                foreach($element['title'] as $title) echo '<li>'.$title.'</li>';
				                    
				                    for($i=0;$i<count($blogPost[0]['title']);$i++){
					                echo '<li>'.$blogPost[0]['title'][$i].'</li>';
				                    }
				                    
			                    ?>
		                </ul>
                        <ul>
			                <?php
				                foreach($element['content'] as $content) echo '<li>'.$content.'</li>';
				                    
				                    for($i=0;$i<count($blogPost[0]['content']);$i++){
					                echo '<li>'.$blogPost[0]['content'][$i].'</li>';
				                    }
				                    
			                    ?>
		                </ul>
                        <ul>
			                <?php
				                foreach($element['author'] as $author) echo '<li>'.$author.'</li>';
				                    
				                    for($i=0;$i<count($blogPost[0]['author']);$i++){
					                echo '<li>'.$blogPost[0]['author'][$i].'</li>';
				                    }
				                    
			                    ?>
		                </ul>
                        <ul>
			                <?php
				                foreach($element['date'] as $date) echo '<li>'.$date.'</li>';
				                    
				                    for($i=0;$i<count($blogPost[0]['date']);$i++){
					                echo '<li>'.$blogPost[0]['date'][$i].'</li>';
				                    }
				                    
			                    ?>
		                </ul>
                    </div>
                }
                
            ?>
