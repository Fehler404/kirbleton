

    <!-- Queries -->
    <div class="docs-section" id="queries">
      <h6 class="docs-header">Media queries</h6>
      <p>Skeleton uses media queries to serve its scalable grid, but also has a list of queries for convenience of styling your site across devices. The queries are mobile-first, meaning they target <code>min-width</code>. Mobile-first queries are how Skeleton's grid is built and is the preferrable method of organizing CSS. It means all styles outside of a query apply to all devices, then larger devices are targeted for enhancement. This prevents small devices from having to parse tons of unused CSS. The sizes for the queries are:</p>
      <div class="docs-example row">
        <div class="six columns">
          <ul>
            <li><strong>Desktop HD</strong>: 1200px</li>
            <li><strong>Desktop</strong>: 1000px</li>
            <li><strong>Tablet</strong>: 750px</li>
          </ul>
        </div>
        <div class="six columns">
          <ul>
            <li><strong>Phablet</strong>: 550px</li>
            <li><strong>Mobile</strong>: 400px</li>
          </ul>
        </div>
      </div>


<!-- CODE EXAMPLE ———————————————————————————————————————— -->
<pre class="code-example">
<code class="code-example-body prettyprint">/* Mobile first queries */

/* Larger than mobile */
@media (min-width: 400px) {}

/* Larger than phablet */
@media (min-width: 550px) {}

/* Larger than tablet */
@media (min-width: 750px) {}

/* Larger than desktop */
@media (min-width: 1000px) {}

/* Larger than Desktop HD */
@media (min-width: 1200px) {}


</code>
</pre>
<!-- ————————————————————————————————————————————————————— -->


    </div>


    <!-- Utilities and Misc. -->
    <div class="docs-section" id="utilities">
      <h6 class="docs-header">Utilities</h6>
      <p>Skeleton has a number of small utility classes that act as easy-to-use helpers. Sometimes it's better to use a utility class than create a whole new class just to float an element.</p>


<!-- CODE EXAMPLE ———————————————————————————————————————— -->
<pre class="code-example">
<code class="code-example-body prettyprint">/* Utility Classes */

/* Make element full width */
.u-full-width {
  width: 100%;
  box-sizing: border-box; }

/* Make sure elements don't run outside containers (great for images in columns) */
.u-max-full-width {
  max-width: 100%;
  box-sizing: border-box; }

/* Float either direction */
.u-pull-right {
  float: right; }
.u-pull-left {
  float: left; }

/* Clear a float */
.u-cf {
  content: "";
  display: table;
  clear: both; }
</code>
</pre>
<!-- ————————————————————————————————————————————————————— -->                         
</div>