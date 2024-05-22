<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Static Navigation</h1>
		<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item"><a href="<?php echo site_url('user') ?>">dashboard</a></li>
		<li class="breadcrumb-item active"><?php echo $title ?></li>
		</ol>
		<div class="card mb-4">
			// message
			<div class="card-header">
				<a href="<?php echo site_url('user/add') ?>"><i class="fas fa-plus"></i> Add New</a>
			</div>
			<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success" role="alert">
				<?php echo $this->session->flashdata('success'); ?>
			</div>
			<?php endif; ?>
			<div class="card-body">
				// content
				
			</div>
		</div>
		<div style="height: 100vh"></div>
		<div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
	</div>
</main>
