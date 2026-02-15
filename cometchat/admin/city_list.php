<?php
include_once('config/config.php');
?><option value="">Select City</option>
					<?php 
					$sql_select="SELECT distinct(city) FROM push_subscribers where city != '' ORDER BY city ASC";					
				$result=$conn1->query($sql_select);					
				while($fetch=$result->fetch_assoc())
				{
		?><option value="<?php echo($fetch['city']); ?>"><?php echo($fetch['city']); ?></option>
<?php 
}?>