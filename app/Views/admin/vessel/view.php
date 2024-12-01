<div class="row">
    <div class="col-md-12">
        <div class="card">


            <div class="card-header">
                <div class="d-flex flex-row justify-content-between">
                    <h4 class="card-title">Vessel List</h4>
                    <form action="<?php echo base_url() . 'addvessel' ?>" method="get">
                        <button class="btn-primary btn-sm" type="submit">Add Vessel</button>
                    </form>
                </div>
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table tablesorter">
                        <thead class="text-primary">
                            <tr>
                                <th>
                                    Vessel ID
                                </th>
                                <th>
                                    Vessel Name
                                </th>
                                <th>
                                    Capacity
                                </th>
                                <th>
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($vessels as $vessel) { ?>
                                <tr>
                                    <td><?php echo $vessel->vessel_id; ?></td>
                                    <td><?php echo $vessel->name; ?></td>
                                    <td><?php echo $vessel->capacity; ?></td>
                                    <td><?php echo $vessel->status == 1 ? 'Active' : 'Under-Maintainance' ; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>