<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Course</h5>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('addcourse/post') ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>From: </label>
                                <select class="form-select px-2 mx-2" name="from">


                                    <?php if (!empty($ports)) { ?>

                                        <option value="<?php echo $ports[0]->port_id; ?>" selected>
                                            <?php echo $ports[0]->port_name; ?>
                                        </option>

                                        <?php for ($i = 1; $i < count($ports); $i++) { ?>
                                            <option <?php echo "value=" . $ports[$i]->port_id; ?>>
                                                <?php echo $ports[$i]->port_name; ?>
                                            </option>
                                        <?php } ?>

                                    <?php } else { ?>

                                        <option value="0" selected>
                                            No Ports Available
                                        </option>
                                    <?php } ?>

                                </select>

                            </div>
                        </div>
                        <div class="col">
                            <label>To: </label>
                            <select class="form-select px-2 mx-2" name="to">
                                <?php if (!empty($ports)) { ?>

                                    <option value="<?php echo $ports[0]->port_id; ?>" selected>
                                        <?php echo $ports[0]->port_name; ?>
                                    </option>

                                    <?php for ($i = 1; $i < count($ports); $i++) { ?>
                                        <option <?php echo "value=" . $ports[$i]->port_id; ?>>
                                            <?php echo $ports[$i]->port_name; ?>
                                        </option>
                                    <?php } ?>
                                <?php } else { ?>

                                    <option value="0" selected>
                                        No Ports Available
                                    </option>
                                <?php } ?>
                            </select>

                        </div>
                        <div class="col">
                            <label>Vessel: </label>
                            <select class="form-select px-2 mx-2" name="vesselID">
                                <?php if (!empty($vessels)) { ?>

                                    <option value="<?php echo $vessels[0]->vessel_id; ?>" selected>
                                        <?php echo $vessels[0]->name; ?>
                                    </option>

                                    <?php for ($i = 1; $i < count($vessels); $i++) { ?>
                                        <option <?php echo "value=" . $vessels[$i]->vessel_id; ?>>
                                            <?php echo $vessels[$i]->name; ?>
                                        </option>
                                    <?php } ?>
                                <?php } else { ?>

                                    <option value="0" selected>
                                        No Vessel Available
                                    </option>
                                <?php } ?>

                            </select>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Departure Time: </label>
                                <input type="time" class="form-control" name="time" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Departure Date: </label>
                                <input type="date" class="form-control" name="date" required>
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