<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Galeria</h3>

                    <a href="<?php echo URL_CMS; ?>/galeria/inserir/" class="btn btn-primary pull-right" >Nova Galeria</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Nome da Galeria</th>
                            <th width="150">Ação</th>
                        </tr>
                        <?php foreach($lista_galerias as $galeria): ?>
                        <tr>
                            <td><?php echo $galeria['id']; ?></td>
                            <td><?php echo $galeria['nome']; ?></td>
                            <td>
                                <a href="<?php echo URL_CMS; ?>/galeria/editar/<?php echo $galeria['id']; ?>" class="btn btn-info" 
                                    >Editar</a>
                                <a href="<?php echo URL_CMS; ?>/galeria/excluir/<?php echo $galeria['id']; ?>" class="btn btn-danger" 
                                      onclick="return confirm('Deseja realmente excluir este registro?')">Excluir</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        <!-- /.box -->
        </div>
    </div>
</section>