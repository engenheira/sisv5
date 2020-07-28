
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Categorias</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Blank Page</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-header">
			
				<h3 class="card-title">Listagem de todas as categorias ativas</h3>
				
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fas fa-times"></i></button>
						</div>
					</div>
					<div class="card-body">
			
					


						<div class="card">
              <div class="card-header">
              <a href="" class="btn btn-primary btn-flat">
													<span class="fa fa-plus">Adicionar categoria</span></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
									<div class="row"><div class="col-sm-12 col-md-6">
						
												</div><div class="col-sm-12 col-md-6">
													<div id="example1_filter" class="dataTables_filter">
												
											</div></div></div><div class="row"><div class="col-sm-12">
													<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
								 
													<thead>
									<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nome</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Descrição</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
									 aria-label="Engine version: activate to sort column ascending">Opções</th>
									</tr>
									</thead>
									
                  <tbody>
                  
									<?php if(!empty($categories)):?>
											<?php foreach ($categories as $category): ?>
                  
                  <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1"><?= $category->id;?></td>
                    <td><?= $category->name;?></td>
                    <td><?= $category->description;?></td>
                    <td>
										<div class="btn-group">
															<a href="#" class="btn btn-info">
																<span class="fa fa-eye"></span>
															</a>
															<a href="#" class="btn btn-warning">
																<span class="fa fa-edit"></span>
															</a>
															<a href="#" class="btn btn-danger">
																<span class="fa fa-trash"></span>
															</a>
														</div>
										</td>
                  
									</tr>
									<?php endforeach; ?>
										<?php endif; ?>
						</tbody>
                  <tfoot>
									<tr><th rowspan="1" colspan="1">ID</th><th rowspan="1" colspan="1">Nome</th><th rowspan="1" colspan="1">Descrição</th><th rowspan="1" colspan="1">Opções</th>
						
								</tr>
                  </tfoot>
								</table></div></div>
							</div>
              </div>
              <!-- /.card-body -->
            </div>


					</div>
					<!-- /.card-body -->
					<div class="card-footer">
					
					</div>
					<!-- /.card-footer-->








					
				</div>
				<!-- /.card -->

			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
