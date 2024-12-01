<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Vessel</h5>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('addvessel/post') ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Vessel Name</label>
                                <input type="text" class="form-control" placeholder="M/V Makabagtik" name="vesselname">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Capacity</label>
                                <input type="number" class="form-control" value="32" name="capacity">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Short Description</label>
                                <input type="text" class="form-control" placeholder="White Color etc..." name="description">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button class="btn-primary btn-sm">Add Vessel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>