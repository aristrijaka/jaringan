<!-- START SIGMA IMPORTS -->
<script src="{base_url}assets/zigma/plugins/sigma.core.js"></script>
<script src="{base_url}assets/zigma/plugins/conrad.js"></script>
<script src="{base_url}assets/zigma/plugins/utils/sigma.utils.js"></script>
<script src="{base_url}assets/zigma/plugins/utils/sigma.polyfills.js"></script>
<script src="{base_url}assets/zigma/plugins/sigma.settings.js"></script>
<script src="{base_url}assets/zigma/plugins/classes/sigma.classes.dispatcher.js"></script>
<script src="{base_url}assets/zigma/plugins/classes/sigma.classes.configurable.js"></script>
<script src="{base_url}assets/zigma/plugins/classes/sigma.classes.graph.js"></script>
<script src="{base_url}assets/zigma/plugins/classes/sigma.classes.camera.js"></script>
<script src="{base_url}assets/zigma/plugins/classes/sigma.classes.quad.js"></script>
<script src="{base_url}assets/zigma/plugins/classes/sigma.classes.edgequad.js"></script>
<script src="{base_url}assets/zigma/plugins/captors/sigma.captors.mouse.js"></script>
<script src="{base_url}assets/zigma/plugins/captors/sigma.captors.touch.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/sigma.renderers.canvas.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/sigma.renderers.webgl.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/sigma.renderers.svg.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/sigma.renderers.def.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/webgl/sigma.webgl.nodes.def.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/webgl/sigma.webgl.nodes.fast.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/webgl/sigma.webgl.edges.def.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/webgl/sigma.webgl.edges.fast.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/webgl/sigma.webgl.edges.arrow.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/canvas/sigma.canvas.labels.def.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/canvas/sigma.canvas.hovers.def.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/canvas/sigma.canvas.nodes.def.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/canvas/sigma.canvas.edges.def.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/canvas/sigma.canvas.edges.curve.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/canvas/sigma.canvas.edges.arrow.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/canvas/sigma.canvas.edges.curvedArrow.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/canvas/sigma.canvas.edgehovers.def.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/canvas/sigma.canvas.edgehovers.curve.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/canvas/sigma.canvas.edgehovers.arrow.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/canvas/sigma.canvas.edgehovers.curvedArrow.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/canvas/sigma.canvas.extremities.def.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/svg/sigma.svg.utils.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/svg/sigma.svg.nodes.def.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/svg/sigma.svg.edges.def.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/svg/sigma.svg.edges.curve.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/svg/sigma.svg.labels.def.js"></script>
<script src="{base_url}assets/zigma/plugins/renderers/svg/sigma.svg.hovers.def.js"></script>
<script src="{base_url}assets/zigma/plugins/middlewares/sigma.middlewares.rescale.js"></script>
<script src="{base_url}assets/zigma/plugins/middlewares/sigma.middlewares.copy.js"></script>
<script src="{base_url}assets/zigma/plugins/misc/sigma.misc.animation.js"></script>
<script src="{base_url}assets/zigma/plugins/misc/sigma.misc.bindEvents.js"></script>
<script src="{base_url}assets/zigma/plugins/misc/sigma.misc.bindDOMEvents.js"></script>
<script src="{base_url}assets/zigma/plugins/misc/sigma.misc.drawHovers.js"></script>
<!-- END SIGMA IMPORTS -->
<script src="{base_url}assets/zigma/plugins/sigma.parsers.json.min.js"></script>
<script src="{base_url}assets/zigma/plugins/sigma.renderers.customShapes/shape-library.js"></script>
<script src="{base_url}assets/zigma/plugins/sigma.renderers.customShapes/sigma.renderers.customShapes.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
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
 * IMPORTANT: This only works with the canvas renderer. TBD in the future
 * will also support the WebGL renderer.
 */
sigma.utils.pkg('sigma.canvas.nodes');

/*s = new sigma.parsers.json('{json}', {
    container: 'graph-container',
	type:'canvas',
    settings: {   
    minNodeSize: 5,
    maxNodeSize: 10,
    }
  });
 */
s = new sigma({
    graph: {json},
    renderer: {
        container: document.getElementById('graph-container'),
        type: 'canvas'
    },
    settings: {
        minNodeSize: 1,
        maxNodeSize: 10,
        minEdgeSize: 0.1,
        maxEdgeSize: 2,
        enableEdgeHovering: true,
        edgeHoverSizeRatio: 2
    }
});
CustomShapes.init(s);  
 // s.refresh();
</script>
