<?php /* Template Name: Become a Member Form */ ?>
<?php if($_POST){ $message = member_save();} ?>

<?php get_header(); ?>
<?php the_post();?>
<?php $title = get_the_title(); ?>

<div class="wrapper single-page">
	<h2 class="heading top-heading"><?php echo $title; ?></h2>
	<?php the_post(); the_content(); ?>	

	<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST" class="become-a-member-form">
		<?php wp_nonce_field( 'secretkeywordissecretkeywordpantherhackers', 'member_save_content_nonce' ); ?>
		
		<?php if($_POST): ?>
			<?php if(isset($message['error'])): ?>
				<div class="alert alert-danger">
					<?php echo $message['error']; ?>
				</div>
				
			<?php elseif(isset($message['success'])): ?>
				<div class="alert alert-success">
					<?php echo $message['success']; ?>
				</div>
			<?php endif ?>
				
		<?php endif; ?>
		
		<div class="form-group">
			<label for="f_name">Name:</label>
			<input type="text" class="form-control" name="user_name" id="f_name" placeholder="ex: Edward Cullen" value="<?php echo @$_POST['user_name']; ?>">
		</div>
		<div class="form-group">
			<label for="f_email">Student email:</label>
			<input type="text" class="form-control" name="panther_id" id="f_email" placeholder="ex: ecullen1@student.gsu.edu" value="<?php echo @$_POST['panther_id']; ?>">
		</div>
		<div class="form-group">
			<label>How much coding experience do you have?</label>
			<div class="radio"> 
				<label for="f_no_experience">
					<input type="radio" name="experience" id="f_no_experience" value="none">
					None at all
				</label>
			</div>
			
			<div class="radio"> 
				<label for="f_some_experience">
					<input type="radio" name="experience" id="f_some_experience" value="A little bit">
					A little bit
				</label>
			</div>
			
			<div class="radio"> 
				<label for="f_large_experience">
					<input type="radio" name="experience" id="f_large_experience" value="A lot">
					A lot
				</label>
			</div>
		</div>
		<div class="form-group">
			<button class="btn" type="submit">Sign Up</button>
		</div>
</div>

<?php get_footer();?>