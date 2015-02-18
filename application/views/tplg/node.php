<!-- START SIGMA IMPORTS -->
<script src="{base_url}assets/zigma/src/sigma.core.js"></script>
<script src="{base_url}assets/zigma/src/conrad.js"></script>
<script src="{base_url}assets/zigma/src/utils/sigma.utils.js"></script>
<script src="{base_url}assets/zigma/src/utils/sigma.polyfills.js"></script>
<script src="{base_url}assets/zigma/src/sigma.settings.js"></script>
<script src="{base_url}assets/zigma/src/classes/sigma.classes.dispatcher.js"></script>
<script src="{base_url}assets/zigma/src/classes/sigma.classes.configurable.js"></script>
<script src="{base_url}assets/zigma/src/classes/sigma.classes.graph.js"></script>
<script src="{base_url}assets/zigma/src/classes/sigma.classes.camera.js"></script>
<script src="{base_url}assets/zigma/src/classes/sigma.classes.quad.js"></script>
<script src="{base_url}assets/zigma/src/classes/sigma.classes.edgequad.js"></script>
<script src="{base_url}assets/zigma/src/captors/sigma.captors.mouse.js"></script>
<script src="{base_url}assets/zigma/src/captors/sigma.captors.touch.js"></script>
<script src="{base_url}assets/zigma/src/renderers/sigma.renderers.canvas.js"></script>
<script src="{base_url}assets/zigma/src/renderers/sigma.renderers.webgl.js"></script>
<script src="{base_url}assets/zigma/src/renderers/sigma.renderers.svg.js"></script>
<script src="{base_url}assets/zigma/src/renderers/sigma.renderers.def.js"></script>
<script src="{base_url}assets/zigma/src/renderers/webgl/sigma.webgl.nodes.def.js"></script>
<script src="{base_url}assets/zigma/src/renderers/webgl/sigma.webgl.nodes.fast.js"></script>
<script src="{base_url}assets/zigma/src/renderers/webgl/sigma.webgl.edges.def.js"></script>
<script src="{base_url}assets/zigma/src/renderers/webgl/sigma.webgl.edges.fast.js"></script>
<script src="{base_url}assets/zigma/src/renderers/webgl/sigma.webgl.edges.arrow.js"></script>
<script src="{base_url}assets/zigma/src/renderers/canvas/sigma.canvas.labels.def.js"></script>
<script src="{base_url}assets/zigma/src/renderers/canvas/sigma.canvas.hovers.def.js"></script>
<script src="{base_url}assets/zigma/src/renderers/canvas/sigma.canvas.nodes.def.js"></script>
<script src="{base_url}assets/zigma/src/renderers/canvas/sigma.canvas.edges.def.js"></script>
<script src="{base_url}assets/zigma/src/renderers/canvas/sigma.canvas.edges.curve.js"></script>
<script src="{base_url}assets/zigma/src/renderers/canvas/sigma.canvas.edges.arrow.js"></script>
<script src="{base_url}assets/zigma/src/renderers/canvas/sigma.canvas.edges.curvedArrow.js"></script>
<script src="{base_url}assets/zigma/src/renderers/canvas/sigma.canvas.edgehovers.def.js"></script>
<script src="{base_url}assets/zigma/src/renderers/canvas/sigma.canvas.edgehovers.curve.js"></script>
<script src="{base_url}assets/zigma/src/renderers/canvas/sigma.canvas.edgehovers.arrow.js"></script>
<script src="{base_url}assets/zigma/src/renderers/canvas/sigma.canvas.edgehovers.curvedArrow.js"></script>
<script src="{base_url}assets/zigma/src/renderers/canvas/sigma.canvas.extremities.def.js"></script>
<script src="{base_url}assets/zigma/src/renderers/svg/sigma.svg.utils.js"></script>
<script src="{base_url}assets/zigma/src/renderers/svg/sigma.svg.nodes.def.js"></script>
<script src="{base_url}assets/zigma/src/renderers/svg/sigma.svg.edges.def.js"></script>
<script src="{base_url}assets/zigma/src/renderers/svg/sigma.svg.edges.curve.js"></script>
<script src="{base_url}assets/zigma/src/renderers/svg/sigma.svg.labels.def.js"></script>
<script src="{base_url}assets/zigma/src/renderers/svg/sigma.svg.hovers.def.js"></script>
<script src="{base_url}assets/zigma/src/middlewares/sigma.middlewares.rescale.js"></script>
<script src="{base_url}assets/zigma/src/middlewares/sigma.middlewares.copy.js"></script>
<script src="{base_url}assets/zigma/src/misc/sigma.misc.animation.js"></script>
<script src="{base_url}assets/zigma/src/misc/sigma.misc.bindEvents.js"></script>
<script src="{base_url}assets/zigma/src/misc/sigma.misc.bindDOMEvents.js"></script>
<script src="{base_url}assets/zigma/src/misc/sigma.misc.drawHovers.js"></script>
<!-- END SIGMA IMPORTS -->
<script src="{base_url}assets/zigma/plugins/sigma.plugins.dragNodes/sigma.plugins.dragNodes.js"></script>
<span>
<div id="container" style="	 height: 800px;
    min-height: 100%;z-index : 90000;">
    <style>
        #graph-container {
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            position: absolute;
        }
    </style>
    <div id="graph-container"></div>
</div>
</span>
<script>
    /**
     * This example shows how to use the dragNodes plugin.
     */
    var i,
        s,
        N = 10,
        E = 10,
        g = {
            nodes: [],
            edges: []
        };
    var data='{json}';
    // Generate a random graph:
    for (i = 0; i < N; i++)
        g.nodes.push({
            id: 'n' + i,
            label: 'Node ' + i,
            x: Math.random(),
            y: Math.random(),
            size: Math.random(),
            color: '#666'
        });

    for (i = 0; i < E; i++)
        g.edges.push({
            id: 'e' + i,
            source: 'n' + (Math.random() * N | 0),
            target: 'n' + (Math.random() * N | 0),
            size: Math.random(),
            color: '#ccc'
        });
    sigma.renderers.def = sigma.renderers.canvas
   // alert(JSON.stringify(g));
     console.log(JSON.stringify({json}));
   //  console.log(JSON.stringify(g));
    // Instantiate sigma:
    s = new sigma({
        graph: JSON.parse(data),
        container: 'graph-container'
    });

    // Initialize the dragNodes plugin:
    var dragListener = sigma.plugins.dragNodes(s, s.renderers[0]);

    dragListener.bind('startdrag', function(event) {
        console.log(event);
    });
    dragListener.bind('drag', function(event) {
        console.log(event);
    });
    dragListener.bind('drop', function(event) {
        console.log(event);
    });
    dragListener.bind('dragend', function(event) {
        console.log(event);
    });
</script>
