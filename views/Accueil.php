<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
	
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}%",
		dataPoints: <?php echo json_encode(Livre::livreParGenre(), JSON_NUMERIC_CHECK) ?>
	}]
});
chart.render();

}
</script>
<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron container">
        <div class="container">
            <h1 class="display-3">Bienvenue !</h1>
            <p>Bienvenue sur le site EPIDEMIA.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8" style="height: 600px">
                <div class="card border-primary mb-3" style="height: 600px">
                    <div class="card-header">Gestion de Paye</div>
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <div class="card-text" id="chartContainer"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="height: 600px">
                <div class="card border-primary mb-3" style="height: 600px">
                    <div class="card-header">getsion de zone</div>
                    
                </div>
            </div>
            <div class="col-md-4" style="height: 600px">
                <div class="card border-primary mb-3" style="height: 600px">
                    <div class="card-header">getsion de point de surveillance</div>
                    
                </div>
            </div>
            <div class="col-md-4" style="height: 600px">
                <div class="card border-primary mb-3" style="height: 600px">
                    <div class="card-header">getsion de utilisateur</div>
                    
                </div>
            </div>
            <div class="col-md-4" style="height: 600px">
                <div class="card border-primary mb-3" style="height: 600px">
                    <div class="card-header">getsion de role</div>
                    
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>