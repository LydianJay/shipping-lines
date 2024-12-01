<div class="row">
    <div class="col-md-12">
        <div class="card">


            <div class="card-header">
                <div class="d-flex flex-row justify-content-between">
                    <h4 class="card-title">Port List</h4>
                    <form action="<?php echo base_url() . 'addport' ?>" method="get">
                        <button class="btn-primary btn-sm" type="submit">Add Port</button>
                    </form>
                </div>
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table tablesorter">
                        <thead class="text-primary">
                            <tr>
                                <th>
                                    Port ID
                                </th>
                                <th>
                                    Port Name
                                </th>
                                <th>
                                    Place Name
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ports as $port) { ?>

                                <tr>
                                    <td><?php echo $port->port_id; ?></td>
                                    <td><?php echo $port->port_name; ?></td>
                                    <td><?php echo $port->place_name; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>