<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Port</h5>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('addport/post') ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Port Name</label>
                                <input type="text" class="form-control" placeholder="Port Of Brgy Bilabid" name="portname">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Place Name</label>
                                <input type="text" class="form-control" placeholder="Brgy Bilabid, Surigao Del Norte" name="placename">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn-primary btn-sm">Add Port</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>