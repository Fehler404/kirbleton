    <!-- Grid -->
    <div class="docs-section" id="grid">
      <h6 class="docs-header">The grid</h6>
      <p>The grid is a <u>12-column fluid grid with a max width of 960px</u>, that shrinks with the browser/device at smaller sizes. The max width can be changed with one line of CSS and all columns will resize accordingly. The syntax is simple and it makes coding responsive much easier. Go ahead, resize the browser. </p>
      <div class="example-grid docs-example">
        <div class="row">
          <div class="one column">One</div>
          <div class="eleven columns">Eleven</div>
        </div>
        <div class="row">
          <div class="two columns">Two</div>
          <div class="ten columns">Ten</div>
        </div>
        <div class="row">
          <div class="three columns">Three</div>
          <div class="nine columns">Nine</div>
        </div>
        <div class="row">
          <div class="four columns">Four</div>
          <div class="eight columns">Eight</div>
        </div>
        <div class="row">
          <div class="five columns">Five</div>
          <div class="seven columns">Seven</div>
        </div>
        <div class="row">
          <div class="six columns">Six</div>
          <div class="six columns">Six</div>
        </div>
        <div class="row">
          <div class="seven columns">Seven</div>
          <div class="five columns">Five</div>
        </div>
        <div class="row">
          <div class="eight columns">Eight</div>
          <div class="four  columns">Four</div>
        </div>
        <div class="row">
          <div class="nine columns">Nine</div>
          <div class="three columns">Three</div>
        </div>
        <div class="row">
          <div class="ten columns">Ten</div>
          <div class="two columns">Two</div>
        </div>
        <div class="row">
          <div class="eleven columns">Eleven</div>
          <div class="one column">One</div>
        </div>
      </div>


<!-- CODE EXAMPLE ———————————————————————————————————————— -->
<pre class="code-example">
<code class="code-example-body prettyprint"><!-- .container is main centered wrapper -->
<div class="container">

  <!-- columns should be the immediate child of a .row -->
  <div class="row">
    <div class="one column">One</div>
    <div class="eleven columns">Eleven</div>
  </div>

  <!-- just use a number and class 'column' or 'columns' -->
  <div class="row">
    <div class="two columns">Two</div>
    <div class="ten columns">Ten</div>
  </div>

  <!-- there are a few shorthand columns widths as well -->
  <div class="row">
    <div class="one-third column">1/3</div>
    <div class="two-thirds column">2/3</div>
  </div>
  <div class="row">
    <div class="one-half column">1/2</div>
    <div class="one-half column">1/2</div>
  </div>

</div>

</code>
</pre>
<!-- ————————————————————————————————————————————————————— -->


    </div>