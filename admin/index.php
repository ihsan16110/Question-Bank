<?php
include "../class/users.php";
$cat=new users;
$category=$cat->cat_shows();
//print_r($category);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  </head>

  <body>

			<?php
			if(isset($_GET['msg']) && !empty($_GET['msg']))
			{
				echo "<p>data insert successfully</p>";
			}
			
			?>
			
			
				  <form method="post" action="add_quiz.php">
					<div class="form-group">
					  <label for="text">Question</label>
					  <input type="text" class="form-control" name="qus"  placeholder="Enter question">
					</div>

					<div class="form-group">
					  <label for="text">option-1</label>
					  <input type="text" class="form-control"  name="op1"  placeholder="Enter option-1">
					</div>
					<div class="form-group">
					  <label for="text">option-2</label>
					  <input type="text" class="form-control" name="op2"  placeholder="Enter option-2">
					</div>
					
					<div class="form-group">
					  <label for="text">option-3</label>
					  <input type="text" class="form-control"  name="op3"  placeholder="Enter option-3">
					</div>
					
					<div class="form-group">
					  <label for="text">option-4</label>
					  <input type="text" class="form-control"  name="op4" id="email" placeholder="Enter option-4">
					</div>
					<div class="form-group">
					  <label for="text">answer</label>
					  <input type="text" class="form-control" name="ans" id="email" placeholder="Enter answer">
					</div>
						<div class="form-group">
						   
						   <select class="form-control" id="sel1" name="cat">
						   
								<option value="" disabled>choose category</option>
								<?php
								foreach($category as $c)
								{
									echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
								}
								
								?>								
						  </select>
						</div>
					<button type="submit" class="btn btn-default">Submit</button><br>
				  </form>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
