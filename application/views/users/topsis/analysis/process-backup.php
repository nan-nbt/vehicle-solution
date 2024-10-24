<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tag -->
    <?php $this->load->view("layouts/_meta.php") ?>

    <!-- title tag -->
    <?php $this->load->view("layouts/_title.php") ?>

    <!-- link stylesheet -->
    <?php $this->load->view("layouts/_css.php") ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
    <!-- Site wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Header -->
        <?php $this->load->view("layouts/_header.php") ?>

        <!-- Sidebar -->
        <?php $this->load->view("layouts/_sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header"></section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">TOPSIS METHOD</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- form start -->
                                    <form class="form-horizontal" id="form-analysis-topsis">
                                        <div class="row border-bottom mb-3" id="cb-alternative">
                                            <!-- list data alternative for check box input -->
                                        </div>
                                        <!-- /.row -->

                                        <div class="row" id="i-criteria">
                                            <!-- list data criteria for user input weight -->
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-3 float-right">
                                                    <div class="form-group">
                                                        <label for="process"></label>
                                                        <button type="submit" class="form-control btn btn-primary" id="process"><span class="nav-icon fas fa-clock"></span> Process Counting</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /.form analysis process -->
                                </div>
                            </div>
                        </div>

                        <!-- result topsis method -->
                        <div class="col-md-12 fade" id="result-topsis-method">
                            <div class="card collapsed-card" id="card-flow-process">
                                <div class="card-header">
                                    <h3 class="card-title">FLOW PROCESS</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus" id="icon-excol"></i></button>
                                    </div>
                                </div>
                                <div class="card-body" id="card-body-flow-process">
                                    <div class="row">
                                        <!-- alternative table -->
                                        <div class="col-md-12">
                                            <label><i class="fas fa-caret-right"></i> Alternative Selected</label>
                                            <table id="table-alternative" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Alternative</th>
                                                        <th>Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="list-alternative">
                                                    <!-- list from ajax response -->
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- crtieria table -->
                                        <div class="col-md-12">
                                            <label><i class="fas fa-caret-right"></i> Criteria & Weight Input</label>
                                            <table id="table-criteria" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Criteria</th>
                                                        <th>Cost/benefit</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="list-criteria">
                                                    <!-- list from ajax response -->
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- mapping alternative crtieria table -->
                                        <div class="col-md-12">
                                            <label><i class="fas fa-caret-right"></i> Conversion Alternative Criteria</label>
                                            <table id="table-mapping" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
                                                <thead id="head-mapping">
                                                    <!-- list from ajax response -->
                                                </thead>
                                                <tbody id="list-mapping">
                                                    <!-- list from ajax response -->
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- matrix normalization table -->
                                        <div class="col-md-12">
                                            <label><i class="fas fa-caret-right"></i> Normalization</label>
                                            <table id="table-normal" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
                                                <thead id="head-normal">
                                                    <!-- list from ajax response -->
                                                </thead>
                                                <tbody id="list-normal">
                                                    <!-- list from ajax response -->
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- matrix normalization weighted table -->
                                        <div class="col-md-12">
                                            <label><i class="fas fa-caret-right"></i> Normalization Weighted</label>
                                            <table id="table-nw" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
                                                <thead id="head-nw">
                                                    <!-- list from ajax response -->
                                                </thead>
                                                <tbody id="list-nw">
                                                    <!-- list from ajax response -->
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- A+ -->
                                        <div class="col-md-12">
                                            <label><i class="fas fa-caret-right"></i> A+</label>
                                            <table id="table-aplus" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
                                                <thead id="head-aplus">
                                                    <!-- list from ajax response -->
                                                </thead>
                                                <tbody>
                                                    <tr id="list-aplus">
                                                        <!-- list from ajax response -->
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- A- -->
                                        <div class="col-md-12">
                                            <label><i class="fas fa-caret-right"></i> A-</label>
                                            <table id="table-amin" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
                                                <thead id="head-amin">
                                                    <!-- list from ajax response -->
                                                </thead>
                                                <tbody>
                                                    <tr id="list-amin">
                                                        <!-- list from ajax response -->
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- D+ -->
                                        <div class="col-md-12">
                                            <label><i class="fas fa-caret-right"></i> D+</label>
                                            <table id="table-dplus" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
                                                <thead id="head-dplus">
                                                    <!-- list from ajax response -->
                                                </thead>
                                                <tbody id="list-dplus">
                                                    <!-- list from ajax response -->
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- D- -->
                                        <div class="col-md-12">
                                            <label><i class="fas fa-caret-right"></i> D-</label>
                                            <table id="table-dmin" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
                                                <thead id="head-dmin">
                                                    <!-- list from ajax response -->
                                                </thead>
                                                <tbody id="list-dmin">
                                                    <!-- list from ajax response -->
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- result -->
                                        <div class="col-md-12">
                                            <label><i class="fas fa-caret-right"></i> Result</label>
                                            <table id="table-res" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
                                                <thead id="head-res">
                                                    <!-- list from ajax response -->
                                                </thead>
                                                <tbody id="list-res">
                                                    <!-- list from ajax response -->
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- result rank -->
                                        <div class="col-md-12">
                                            <label><i class="fas fa-caret-right"></i> Result Ranking</label>
                                            <table id="table-resrank" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
                                                <thead id="head-resrank">
                                                    <!-- list from ajax response -->
                                                </thead>
                                                <tbody id="list-resrank">
                                                    <!-- list from ajax response -->
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- alternative rank -->
                                        <div class="col-md-12">
                                            <label><i class="fas fa-caret-right"></i> Alternative Ranking</label>
                                            <table id="table-altrank" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
                                                <thead id="head-altrank">
                                                    <!-- list from ajax response -->
                                                </thead>
                                                <tbody id="list-altrank">
                                                    <!-- list from ajax response -->
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- ./card-body -->
                            </div>
                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">CONCLUSION</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label><i class="fas fa-caret-right"></i> Alternative Rangking</label>
                                            <table id="table-conclusion" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Rangking</th>
                                                        <th>Alternative</th>
                                                        <th>Value</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="list-conclusion">
                                                    <!-- list from ajax response -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="alert alert-info alert-dismissible">
                                        <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                        <h5><i class="icon fas fa-info"></i> Infromation!</h5>
                                        Based on the results of the decision support system using the TOPSIS method, the best result is the <strong>${bestConc}</strong>. You can check detail of the vehicle on the <a href="${urlConc}" target="official">Official Website</a>.
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.result topsis method -->
                    </div>
                    <!-- /.container-fluid -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <div id="close-overlay"></div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        <?php $this->load->view("layouts/_footer.php") ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- Javascript -->
    <?php $this->load->view("layouts/_js.php") ?>

    <!-- Page specific script -->
    <script>
        // page onload function
        $(document).ready(function() {
            // call function on page ready
            loadAlternative();
            loadCriteria();
        });

        // pace-progress when ajax request
        $(document).ajaxStart(function() {
            Pace.restart();
        });

        function loadAlternative() {
            $.ajax({
                url: "<?php echo base_url('users/alternative/listalternative'); ?>",
                async: true,
                dataType: 'json',
                success: function(response) {
                    if (response.length > 0) {
                        let cb = response.map(alternate => `
								<div class="col-md-2">
									<div class="form-group clearfix">
										<div class="icheck-primary d-inline" style="margin-right: 30px;">
										<input type="checkbox" id="${alternate.aid}" checked>
										<label for="${alternate.aid}">${alternate.name}</label>
										</div>
									</div>
								</div>
						`).join('');

                        $('#cb-alternative').html(cb);
                    }
                }
            });
        }

        function loadCriteria() {
            $.ajax({
                url: "<?php echo base_url('users/criteria/listcriteria'); ?>",
                async: true,
                dataType: 'json',
                success: function(response) {
                    if (response.length > 0) {
                        let options = response.map(criterion => `
								<div class="col-md-3">
									<div class="form-group">
									<label for="${criterion.cid}" style="margin-bottom:9px;"><span class="text-danger">*</span>${criterion.name} :</label>
									<input type="number" class="form-control" id="${criterion.cid}" name="criteria[]" placeholder="0.00 ~ 10.00" max="100" value="${criterion.weight}" data-impact="${criterion.impact}" required>
									</div>
								</div>
						`).join('');

                        $('#i-criteria').html(options);
                    }
                }
            });
        }

        function topsisMethod(matrix, weights, impacts) {
            debugger
            // create matrix normalization
            const normalized = [];
            const matnorm = [];
            const matnormweight = [];
            for (let i = 0; i < matrix.length; i++) {
                normalized[i] = [];
                matnorm[i] = [];
                matnormweight[i] = [];
                for (let j = 0; j < matrix[i].length; j++) {
                    // counting normalization value
                    const sum = matrix.reduce((acc, row) => acc + row[j] ** 2, 0);
                    normalized[i][j] = matrix[i][j] / Math.sqrt(sum);
                    matnorm[i].push(normalized[i][j]);
                    // implementation normalization weighted
                    // normalized[i][j] *= weights[j];
                    matnormweight[i].push(normalized[i][j] *= weights[j]);
                    // implementation impacts
                    normalized[i][j] *= impacts[j] === '+' ? 1 : -1;
                }
            }

            // matrix idal positive and ideal negative solution
            const idealPos = [];
            const idealNeg = [];
            for (let j = 0; j < matrix[0].length; j++) {
                idealPos[j] = Math.max(...normalized.map((row) => row[j]));
                idealNeg[j] = Math.min(...normalized.map((row) => row[j]));
            }

            // count distance alternative with ideal positive and negative solution
            const posDist = [];
            const negDist = [];
            for (let i = 0; i < normalized.length; i++) {
                posDist[i] = Math.sqrt(
                    normalized[i].reduce(
                        (acc, value, j) => acc + (value - idealPos[j]) ** 2,
                        0
                    )
                );
                negDist[i] = Math.sqrt(
                    normalized[i].reduce(
                        (acc, value, j) => acc + (value - idealNeg[j]) ** 2,
                        0
                    )
                );
            }

            // count preferenced value
            const preference = [];
            for (let i = 0; i < normalized.length; i++) {
                preference[i] = negDist[i] / (posDist[i] + negDist[i]);
            }

            return [matnorm, matnormweight, normalized, idealPos, idealNeg, posDist, negDist, preference];

        }

        $('#form-analysis-topsis').on('submit', function(event) {
            debugger
            event.preventDefault();

            const cb = $(this).find(':input[type="checkbox"]:checked');
            const opt = $(this).find(':input[type="number"]');

            const array_aid = [];

            for (let i = 0; i < cb.length; i++) {
                array_aid.push("'" + cb[i].id + "'");
            }

            $.ajax({
                url: '<?php echo base_url('users/mapping/listmapbyalt'); ?>',
                method: 'post',
                dataType: 'json',
                data: {
                    array_aid: array_aid
                },
                success: function(response) {
                    debugger
                    if (response.length > 0) {
                        // create the result array using a loop
                        const matrix = [];
                        const weights = [];
                        const impacts = [];

                        // create aid object
                        const aidMap = {};

                        for (let i = 0; i < response.length; i++) {
                            let obj = response[i];
                            let aid = obj.aid;
                            let weight = obj.weight;

                            if (!aidMap[aid]) {
                                aidMap[aid] = [];
                            }

                            aidMap[aid].push(weight);
                        }

                        // convert aidMap to array of arrays (set matrix data)
                        for (let aid in aidMap) {
                            if (aidMap.hasOwnProperty(aid)) {
                                matrix.push(aidMap[aid]);
                            }
                        }

                        // set weights data
                        for (let i = 0; i < opt.length; i++) {
                            weights.push(opt[i].value);
                        }

                        // set impacts data
                        for (let i = 0; i < opt.length; i++) {
                            if (opt[i].dataset.impact === 'Cost') {
                                impacts.push('-');
                            } else {
                                impacts.push('+');
                            }
                        }

                        // run function topsis method
                        topsisMethod(matrix, weights, impacts);

                        /**@abstract
                         * FLOW PROCESS
                         * get alternative rows data selected
                         */
                        let noAlt = 1;
                        const rowsAlt = [];
                        const uniqueAids = new Map();

                        for (const item of response) {
                            const {
                                aid,
                                anm,
                                adesc
                            } = item;

                            if (!uniqueAids.has(aid)) {
                                uniqueAids.set(aid, true);
                                rowsAlt.push(`
									<tr>
										<td>${noAlt++}</td>
										<td>${anm}</td>
										<td>${adesc}</td>
									</tr>
								`);
                            }
                        }

                        const altHtml = rowsAlt.join('\n');

                        $('#table-alternative').DataTable().destroy();
                        $('#list-alternative').html(altHtml);
                        $('#table-alternative').DataTable({
                            scrollX: true
                        });

                        /**@abstract
                         * get criteria rows data 
                         */
                        let noCri = 1;
                        const rowsCri = [];
                        const uniqueCris = new Map();

                        for (const item of response) {
                            const {
                                cid,
                                cnm,
                                imp,
                                cweight
                            } = item;

                            if (!uniqueCris.has(cid)) {
                                uniqueCris.set(cid, true);
                                rowsCri.push(`
									<tr>
										<td>${noCri++}</td>
										<td>${cnm}</td>
										<td>${imp}</td>
										<td>${cweight}</td>
									</tr>
								`);
                            }
                        }

                        const criHtml = rowsCri.join('\n');

                        $('#table-criteria').DataTable().destroy();
                        $('#list-criteria').html(criHtml);
                        $('#table-criteria').DataTable({
                            scrollX: true
                        });

                        /**@abstract
                         * conversion alternative criteria
                         */
                        const headConv = [];
                        const rowsConv = [];

                        debugger
                        headConv.push('<tr>');
                        for (let i = 0; i < matrix[0].length; i++) {
                            headConv.push('<th>-</th>');
                        }
                        headConv.push('</tr>');

                        const headConvHtml = headConv.join('\n');

                        for (let i = 0; i < matrix.length; i++) {
                            rowsConv.push('<tr>');

                            for (let j = 0; j < matrix[i].length; j++) {
                                rowsConv.push('<td>' + matrix[i][j] + '</td>');
                                if (j === matrix[i].length - 1) {
                                    rowsConv.push('</tr>');
                                }
                            }
                            headConv.push('</tr>');
                        }

                        const convHtml = rowsConv.join('\n');

                        $('#head-mapping').html(headConvHtml);
                        $('#table-mapping').DataTable().destroy();
                        $('#list-mapping').html(convHtml);
                        $('#table-mapping').DataTable({
                            scrollX: true
                        });

                        /**@abstract
                         * matrix normalization
                         */
                        const headNorm = [];
                        const rowsNorm = [];
                        const [matnorm, matnormweight, normalized, idealPos, idealNeg, posDist, negDist, preference] = topsisMethod(matrix, weights, impacts);

                        debugger
                        headNorm.push('<tr>');
                        for (let i = 0; i < matnorm[0].length; i++) {
                            headNorm.push('<th>-</th>');
                        }
                        headNorm.push('</tr>');

                        const headNormHtml = headNorm.join('\n');

                        for (let i = 0; i < matnorm.length; i++) {
                            rowsNorm.push('<tr>');

                            for (let j = 0; j < matnorm[i].length; j++) {
                                rowsNorm.push('<td>' + matnorm[i][j] + '</td>');
                                if (j === matnorm[i].length - 1) {
                                    rowsNorm.push('</tr>');
                                }
                            }
                        }

                        const matrixNormHtml = rowsNorm.join('\n');

                        $('#head-normal').html(headNormHtml);
                        $('#table-normal').DataTable().destroy();
                        $('#list-normal').html(matrixNormHtml);
                        $('#table-normal').DataTable({
                            scrollX: true
                        });

                        /**@abstract
                         * normalization weighted
                         */
                        const headNormWeight = [];
                        const rowsNormWeight = [];

                        debugger
                        headNormWeight.push('<tr>');
                        for (let i = 0; i < matnormweight[0].length; i++) {
                            headNormWeight.push('<th>-</th>');
                        }
                        headNormWeight.push('</tr>');

                        const headNormWeightHtml = headNormWeight.join('\n');

                        for (let i = 0; i < matnormweight.length; i++) {
                            rowsNormWeight.push('<tr>');

                            for (let j = 0; j < matnormweight[i].length; j++) {
                                rowsNormWeight.push('<td>' + matnormweight[i][j] + '</td>');
                                if (j === matnormweight[i].length - 1) {
                                    rowsNormWeight.push('</tr>');
                                }
                            }
                        }

                        const matrixNormWeightHtml = rowsNormWeight.join('\n');

                        $('#head-nw').html(headNormWeightHtml);
                        $('#table-nw').DataTable().destroy();
                        $('#list-nw').html(matrixNormWeightHtml);
                        $('#table-nw').DataTable({
                            scrollX: true
                        });

                        /**@abstract
                         * ideal positive
                         */
                        const headIdealPos = [];
                        const rowsIdealPos = [];

                        debugger
                        headIdealPos.push('<tr>');
                        for (let i = 0; i < idealPos.length; i++) {
                            headIdealPos.push('<th>-</th>');
                        }
                        headIdealPos.push('</tr>');

                        const headIdealPosHtml = headIdealPos.join('\n');

                        for (let i = 0; i < idealPos.length; i++) {
                            rowsIdealPos.push('<td>' + idealPos[i] + '</td>');
                        }

                        const idealPosHtml = rowsIdealPos.join('\n');

                        $('#head-aplus').html(headIdealPosHtml);
                        $('#list-aplus').html(idealPosHtml);
                        $('#table-aplus').DataTable().destroy();
                        $('#table-aplus').DataTable({
                            scrollX: true
                        });

                        /**@abstract
                         * ideal negative
                         */
                        const headIdealNeg = [];
                        const rowsIdealNeg = [];

                        debugger
                        headIdealNeg.push('<tr>');
                        for (let i = 0; i < idealNeg.length; i++) {
                            headIdealNeg.push('<th>-</th>');
                        }
                        headIdealNeg.push('</tr>');

                        const headIdealNegHtml = headIdealNeg.join('\n');

                        for (let i = 0; i < idealNeg.length; i++) {
                            rowsIdealNeg.push('<td>' + idealNeg[i] + '</td>');
                        }

                        const idealNegHtml = rowsIdealNeg.join('\n');

                        $('#head-amin').html(headIdealNegHtml);
                        $('#list-amin').html(idealNegHtml);
                        $('#table-amin').DataTable().destroy();
                        $('#table-amin').DataTable({
                            scrollX: true
                        });

                        /**@abstract
                         * positive distance
                         */
                        const headPosDist = [];
                        const rowsPosDist = [];

                        debugger
                        headPosDist.push('<tr>');
                        for (let i = 0; i < posDist.indexOf.length; i++) {
                            headPosDist.push('<th>-</th>');
                        }
                        headPosDist.push('</tr>');

                        const headPosDistHtml = headPosDist.join('\n');

                        for (let i = 0; i < posDist.length; i++) {
                            rowsPosDist.push('<tr><td>' + posDist[i] + '</td></tr>');
                        }

                        const posDistHtml = rowsPosDist.join('\n');

                        $('#head-dplus').html(headPosDistHtml);
                        $('#table-dplus').DataTable().destroy();
                        $('#list-dplus').html(posDistHtml);
                        $('#table-dplus').DataTable({
                            scrollX: true
                        });

                        /**@abstract
                         * negative distance
                         */
                        const headNegDist = [];
                        const rowsNegDist = [];

                        debugger
                        headNegDist.push('<tr>');
                        for (let i = 0; i < negDist.indexOf.length; i++) {
                            headNegDist.push('<th>-</th>');
                        }
                        headNegDist.push('</tr>');

                        const headNegDistHtml = headNegDist.join('\n');

                        for (let i = 0; i < negDist.length; i++) {
                            rowsNegDist.push('<tr><td>' + negDist[i] + '</td></tr>');
                        }

                        const negDistHtml = rowsNegDist.join('\n');

                        $('#head-dmin').html(headNegDistHtml);
                        $('#table-dmin').DataTable().destroy();
                        $('#list-dmin').html(negDistHtml);
                        $('#table-dmin').DataTable({
                            scrollX: true
                        });

                        /**@abstract
                         * result preference
                         */
                        const headPref = [];
                        const rowsPref = [];

                        debugger
                        headPref.push('<tr>');
                        for (let i = 0; i < preference.indexOf.length; i++) {
                            headPref.push('<th>-</th>');
                        }
                        headPref.push('</tr>');

                        const headPrefHtml = headPref.join('\n');

                        for (let i = 0; i < preference.length; i++) {
                            rowsPref.push('<tr><td>' + preference[i] + '</td></tr>');
                        }

                        const preferenceHtml = rowsPref.join('\n');

                        $('#head-res').html(headPrefHtml);
                        $('#table-res').DataTable().destroy();
                        $('#list-res').html(preferenceHtml);
                        $('#table-res').DataTable({
                            scrollX: true
                        });

                        /**@abstract
                         * create data array alternative value for get preference ranking 
                         * array = [[alternative, value]]
                         */
                        debugger
                        const alt = [];
                        const altUrl = [];
                        const altPref = [];

                        for (let i = 0; i < response.length; i++) {
                            if (!alt.includes(response[i].anm)) {
                                alt.push(response[i].anm);
                            }
                        }

                        for (let i = 0; i < response.length; i++) {
                            if (!altUrl.includes(response[i].url)) {
                                altUrl.push(response[i].url);
                            }
                        }

                        for (let i = 0; i < alt.length; i++) {
                            altPref.push([alt[i], preference[i], altUrl[i]]);
                        }

                        /**@abstract
                         * preference ranking
                         */
                        const headPrefRank = [];
                        const rowsPrefRank = [];
                        const prefRank = altPref.sort((a, b) => b[1] - a[1]);

                        debugger
                        headPrefRank.push('<tr>');
                        for (let i = 0; i < prefRank.indexOf.length; i++) {
                            headPrefRank.push('<th>-</th>');
                        }
                        headPrefRank.push('</tr>');

                        const headPrefRankHtml = headPrefRank.join('\n');

                        for (let i = 0; i < prefRank.length; i++) {
                            rowsPrefRank.push('<tr><td>' + prefRank[i][1] + '</td></tr>');
                        }

                        const prefRankHtml = rowsPrefRank.join('\n');

                        $('#head-resrank').html(headPrefRankHtml);
                        $('#table-resrank').DataTable().destroy();
                        $('#list-resrank').html(prefRankHtml);
                        $('#table-resrank').DataTable({
                            scrollX: true
                        });

                        /**@abstract
                         * alternative ranking
                         */
                        debugger
                        const headAltRank = [];
                        const rowsAltRank = [];

                        debugger
                        headAltRank.push('<tr>');
                        for (let i = 0; i < altPref.indexOf.length; i++) {
                            headAltRank.push('<th>-</th>');
                        }
                        headAltRank.push('</tr>');

                        const headAltRankHtml = headAltRank.join('\n');

                        for (let i = 0; i < altPref.length; i++) {
                            rowsAltRank.push('<tr><td>' + altPref[i][0] + '</td></tr>');
                        }

                        const altRankHtml = rowsAltRank.join('\n');

                        $('#head-altrank').html(headAltRankHtml);
                        $('#table-altrank').DataTable().destroy();
                        $('#list-altrank').html(altRankHtml);
                        $('#table-altrank').DataTable({
                            scrollX: true
                        });

                        /**@abstract
                         * CONCLUSION
                         * conclusion alternative ranking
                         */
                        debugger
                        let noConc = 1;
                        const rowsAltConc = [];

                        for (let i = 0; i < altPref.length; i++) {
                            rowsAltConc.push('<tr><td>' + noConc++ + '</td><td>' + altPref[i][0] + '</td><td>' + altPref[i][1] + '</td></tr>');
                        }

                        const concHtml = rowsAltConc.join('\n');
                        const bestConc = altPref[0][0];
                        const urlConc = altPref[0][2];

                        $('#table-conclusion').DataTable().destroy();
                        $('#list-conclusion').html(concHtml);
                        $('#table-conclusion').DataTable({
                            scrollX: true
                        });
                    }

                    $('#result-topsis-method').removeClass('hide');
                    $('#result-topsis-method').addClass('show');
                    $('#card-flow-process').addClass('collapsed-card');
                    $('#card-body-flow-process').attr('style', 'display:none');
                    $('#icon-excol').removeClass('fa-minus');
                    $('#icon-excol').addClass('fa-plus');
                }
            });
        });
    </script>

</body>

</html>