<ul class="nav-tabs nav component-tabs">
    <li><a href="#button" data-bs-toggle="tab" class="active">Button</a></li>
    <li><a href="#card" data-bs-toggle="tab">Card</a></li>
    <li><a href="#alert" data-bs-toggle="tab">Alert</a></li>
    <li><a href="#chart" data-bs-toggle="tab">Chart</a></li>
    <li><a href="#data-table" data-bs-toggle="tab">Data Table</a></li>
    <li><a href="#input" data-bs-toggle="tab">Input Field</a></li>
    <li><a href="#modal" data-bs-toggle="tab">Modal</a></li>
    <li><a href="#plan" data-bs-toggle="tab">Plan</a></li>
    <li><a href="#widget" data-bs-toggle="tab">Widget</a></li>
</ul>

<div class="tab-content">
    <div class="tab-pane show fade active" id="button">
        <div class="row align-items-center mb-30">
            <div class="col-lg-6 col-6">
                <h6 class="page-title">Button library</h6>
                <nav aria-label="breadcrumb" class="d-inline-block ml-md-4">
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item">Buttons</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 col-6 text-end">
                <a href="#" class="btn btn-sm bg--white box--shadow1 text--small">New</a>
                <a href="#" class="btn btn-sm bg--white box--shadow1 text--small">Filters</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">Bootstrap defualt solid buttons</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#button1" role="button" aria-expanded="false" aria-controls="button1"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="button--group">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-light">Light</button>
                            <button type="button" class="btn btn-dark">Dark</button>
                            <button type="button" class="btn btn-link">Link</button>
                        </div>
                        <div class="collapse code-body" id="button1">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
    &lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary"&gt;Secondary&lt;/button&gt;
    &lt;button type="button" class="btn btn-success"&gt;Success&lt;/button&gt;
    &lt;button type="button" class="btn btn-danger"&gt;Danger&lt;/button&gt;
    &lt;button type="button" class="btn btn-warning"&gt;Warning&lt;/button&gt;
    &lt;button type="button" class="btn btn-info"&gt;Info&lt;/button&gt;
    &lt;button type="button" class="btn btn-light"&gt;Light&lt;/button&gt;
    &lt;button type="button" class="btn btn-dark"&gt;Dark&lt;/button&gt;
    &lt;button type="button" class="btn btn-link"&gt;Link&lt;/button&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div><!-- card-body end -->
                </div><!-- card end -->
            </div>

            <div class="col-lg-12 mt-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">Custom solid buttons</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#button2" role="button" aria-expanded="false" aria-controls="button2"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="button--group">
                            <button type="button" class="btn btn--primary">Primary</button>
                            <button type="button" class="btn btn--secondary">Secondary</button>
                            <button type="button" class="btn btn--success">Success</button>
                            <button type="button" class="btn btn--danger">Danger</button>
                            <button type="button" class="btn btn--warning">Warning</button>
                            <button type="button" class="btn btn--info">Info</button>
                            <button type="button" class="btn btn--dark">Dark</button>
                        </div>
                        <div class="collapse code-body" id="button2">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
    &lt;button type="button" class="btn btn--primary"&gt;Primary&lt;/button&gt;
    &lt;button type="button" class="btn btn--secondary"&gt;Secondary&lt;/button&gt;
    &lt;button type="button" class="btn btn--success"&gt;Success&lt;/button&gt;
    &lt;button type="button" class="btn btn--danger"&gt;Danger&lt;/button&gt;
    &lt;button type="button" class="btn btn--warning"&gt;Warning&lt;/button&gt;
    &lt;button type="button" class="btn btn--info"&gt;Info&lt;/button&gt;
    &lt;button type="button" class="btn btn--dark"&gt;Dark&lt;/button&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div><!-- card-body end -->
                </div><!-- card end -->
            </div>

            <div class="col-lg-12 mt-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">Bootstrap defualt outline buttons</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#button3" role="button" aria-expanded="false" aria-controls="button3"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="button--group">
                            <button type="button" class="btn btn-outline-primary">Primary</button>
                            <button type="button" class="btn btn-outline-secondary">Secondary</button>
                            <button type="button" class="btn btn-outline-success">Success</button>
                            <button type="button" class="btn btn-outline-danger">Danger</button>
                            <button type="button" class="btn btn-outline-warning">Warning</button>
                            <button type="button" class="btn btn-outline-info">Info</button>
                            <button type="button" class="btn btn-outline-dark">Dark</button>
                        </div>
                        <div class="collapse code-body" id="button3">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;button type="button" class="btn btn-outline-primary"&gt;Primary&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline-secondary"&gt;Secondary&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline-success"&gt;Success&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline-danger"&gt;Danger&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline-warning"&gt;Warning&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline-info"&gt;Info&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline-dark"&gt;Dark&lt;/button&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div><!-- card-body end -->
                </div><!-- card end -->
            </div>

            <div class="col-lg-12 mt-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">Custom outline buttons</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#button4" role="button" aria-expanded="false" aria-controls="button4"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="button--group">
                            <button type="button" class="btn btn-outline--primary">Primary</button>
                            <button type="button" class="btn btn-outline--secondary">Secondary</button>
                            <button type="button" class="btn btn-outline--success">Success</button>
                            <button type="button" class="btn btn-outline--danger">Danger</button>
                            <button type="button" class="btn btn-outline--warning">Warning</button>
                            <button type="button" class="btn btn-outline--info">Info</button>
                            <button type="button" class="btn btn-outline--dark">Dark</button>
                        </div>
                        <div class="collapse code-body" id="button4">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;button type="button" class="btn btn-outline-primary"&gt;Primary&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline-secondary"&gt;Secondary&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline-success"&gt;Success&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline-danger"&gt;Danger&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline-warning"&gt;Warning&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline-info"&gt;Info&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline-dark"&gt;Dark&lt;/button&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div><!-- card-body end -->
                </div><!-- card end -->
            </div>

            <div class="col-lg-12 mt-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">Shadow for buttons</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#button5" role="button" aria-expanded="false" aria-controls="button5"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="button--group">
                            <button type="button" class="btn btn--primary btn--shadow">Primary</button>
                            <button type="button" class="btn btn--secondary btn--shadow">Secondary</button>
                            <button type="button" class="btn btn--success btn--shadow">Success</button>
                            <button type="button" class="btn btn--danger btn--shadow">Danger</button>
                            <button type="button" class="btn btn--warning btn--shadow">Warning</button>
                            <button type="button" class="btn btn--info btn--shadow">Info</button>
                            <button type="button" class="btn btn--dark btn--shadow">Dark</button>
                        </div>
                        <div class="collapse code-body" id="button5">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;button type="button" class="btn btn--primary btn--shadow"&gt;Primary&lt;/button&gt;
  &lt;button type="button" class="btn btn--secondary btn--shadow"&gt;Secondary&lt;/button&gt;
  &lt;button type="button" class="btn btn--success btn--shadow"&gt;Success&lt;/button&gt;
  &lt;button type="button" class="btn btn--danger btn--shadow"&gt;Danger&lt;/button&gt;
  &lt;button type="button" class="btn btn--warning btn--shadow"&gt;Warning&lt;/button&gt;
  &lt;button type="button" class="btn btn--info btn--shadow"&gt;Info&lt;/button&gt;
  &lt;button type="button" class="btn btn--dark btn--shadow"&gt;Dark&lt;/button&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div><!-- card-body end -->
                </div><!-- card end -->
            </div>

            <div class="col-lg-12 mt-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">Shadow for outline buttons</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#button6" role="button" aria-expanded="false" aria-controls="button6"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="button--group">
                            <button type="button" class="btn btn-outline--primary btn--shadow">Primary</button>
                            <button type="button" class="btn btn-outline--secondary btn--shadow">Secondary</button>
                            <button type="button" class="btn btn-outline--success btn--shadow">Success</button>
                            <button type="button" class="btn btn-outline--danger btn--shadow">Danger</button>
                            <button type="button" class="btn btn-outline--warning btn--shadow">Warning</button>
                            <button type="button" class="btn btn-outline--info btn--shadow">Info</button>
                            <button type="button" class="btn btn-outline--dark btn--shadow">Dark</button>
                        </div>
                        <div class="collapse code-body" id="button6">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;button type="button" class="btn btn-outline--primary btn--shadow"&gt;Primary&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline--secondary btn--shadow"&gt;Secondary&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline--success btn--shadow"&gt;Success&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline--danger btn--shadow"&gt;Danger&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline--warning btn--shadow"&gt;Warning&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline--info btn--shadow"&gt;Info&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline--dark btn--shadow"&gt;Dark&lt;/button&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div><!-- card-body end -->
                </div><!-- card end -->
            </div>

            <div class="col-lg-12 mt-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">Capsule button</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#button7" role="button" aria-expanded="false" aria-controls="button7"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="button--group">
                            <button type="button" class="btn btn--primary btn--capsule ">Primary</button>
                            <button type="button" class="btn btn--secondary btn--capsule">Secondary</button>
                            <button type="button" class="btn btn--success btn--capsule">Success</button>
                            <button type="button" class="btn btn--danger btn--capsule">Danger</button>
                            <button type="button" class="btn btn--warning btn--capsule">Warning</button>
                            <button type="button" class="btn btn--info btn--capsule">Info</button>
                            <button type="button" class="btn btn--dark btn--capsule">Dark</button>
                        </div>
                        <div class="collapse code-body" id="button7">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;button type="button" class="btn btn--primary btn--capsule"&gt;Primary&lt;/button&gt;
  &lt;button type="button" class="btn btn--secondary btn--capsule"&gt;Secondary&lt;/button&gt;
  &lt;button type="button" class="btn btn--success btn--capsule"&gt;Success&lt;/button&gt;
  &lt;button type="button" class="btn btn--danger btn--capsule"&gt;Danger&lt;/button&gt;
  &lt;button type="button" class="btn btn--warning btn--capsule"&gt;Warning&lt;/button&gt;
  &lt;button type="button" class="btn btn--info btn--capsule"&gt;Info&lt;/button&gt;
  &lt;button type="button" class="btn btn--dark btn--capsule"&gt;Dark&lt;/button&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div><!-- card-body end -->
                </div><!-- card end -->
            </div>

            <div class="col-lg-12 mt-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">Capsule outline buttons</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#button8" role="button" aria-expanded="false" aria-controls="button8"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="button--group">
                            <button type="button" class="btn btn-outline--primary btn--capsule">Primary</button>
                            <button type="button" class="btn btn-outline--secondary btn--capsule">Secondary</button>
                            <button type="button" class="btn btn-outline--success btn--capsule">Success</button>
                            <button type="button" class="btn btn-outline--danger btn--capsule">Danger</button>
                            <button type="button" class="btn btn-outline--warning btn--capsule">Warning</button>
                            <button type="button" class="btn btn-outline--info btn--capsule">Info</button>
                            <button type="button" class="btn btn-outline--dark btn--capsule">Dark</button>
                        </div>
                        <div class="collapse code-body" id="button8">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;button type="button" class="btn btn-outline--primary btn--capsule"&gt;Primary&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline--secondary btn--capsule"&gt;Secondary&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline--success btn--capsule"&gt;Success&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline--danger btn--capsule"&gt;Danger&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline--warning btn--capsule"&gt;Warning&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline--info btn--capsule"&gt;Info&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline--dark btn--capsule"&gt;Dark&lt;/button&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div><!-- card-body end -->
                </div><!-- card end -->
            </div>

            <div class="col-lg-12 mt-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">Capsule outline buttons</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#button9" role="button" aria-expanded="false" aria-controls="button9"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="button--group">
                            <button type="button" class="btn btn--primary btn--gradi btn--shadow">Primary</button>
                            <button type="button" class="btn btn--secondary btn--gradi btn--shadow">Secondary</button>
                            <button type="button" class="btn btn--success btn--gradi btn--shadow">Success</button>
                            <button type="button" class="btn btn--danger btn--gradi btn--shadow">Danger</button>
                            <button type="button" class="btn btn--warning btn--gradi btn--shadow">Warning</button>
                            <button type="button" class="btn btn--info btn--gradi btn--shadow">Info</button>
                            <button type="button" class="btn btn--dark btn--gradi btn--shadow">Dark</button>
                        </div>
                        <div class="collapse code-body" id="button9">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;button type="button" class="btn btn--primary btn--gradi btn--shadow"&gt;Primary&lt;/button&gt;
  &lt;button type="button" class="btn btn--secondary btn--gradi btn--shadow"&gt;Secondary&lt;/button&gt;
  &lt;button type="button" class="btn btn--success btn--gradi btn--shadow"&gt;Success&lt;/button&gt;
  &lt;button type="button" class="btn btn--danger btn--gradi btn--shadow"&gt;Danger&lt;/button&gt;
  &lt;button type="button" class="btn btn--warning btn--gradi btn--shadow"&gt;Warning&lt;/button&gt;
  &lt;button type="button" class="btn btn--info btn--gradi btn--shadow"&gt;Info&lt;/button&gt;
  &lt;button type="button" class="btn btn--dark btn--gradi btn--shadow"&gt;Dark&lt;/button&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div><!-- card-body end -->
                </div><!-- card end -->

            </div><!-- row end -->
        </div>
    </div>

    <div class="tab-pane show fade" id="card">
        <div class="row align-items-center mb-30">
            <div class="col-lg-6 col-6">
                <h6 class="page-title">Card Style</h6>
                <nav aria-label="breadcrumb" class="d-inline-block ml-md-4">
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item">cards</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 col-6 text-end">
                <a href="#" class="btn btn-sm bg--white box--shadow1 text--small">New</a>
                <a href="#" class="btn btn-sm bg--white box--shadow1 text--small">Filters</a>
            </div>
        </div>

        <div class="row mb-none-30">
            <div class="col-lg-12 mb-30">
                <h4>Text alignment Card</h4>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text mb-20">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text mb-20">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30">
                <div class="card text-end">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text mb-20">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div><!-- row end -->

        <div class="row mb-none-30 mt-50">
            <div class="col-lg-12">
                <h4 class="mb-30">Horizontal Card</h4>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-6 mb-30">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-sm-4">
                            <img src="assets/images/card/2.jpg" class="card-img style--horizontal" alt="image">
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text mb-15">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div><!-- card end -->
            </div>
            <div class="col-xl-6 col-lg-12 col-md-6 mb-30">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-sm-4">
                            <img src="assets/images/card/3.jpg" class="card-img style--horizontal" alt="image">
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text mb-15">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div><!-- card end -->
            </div>
        </div><!-- row end -->

        <div class="row mb-none-30 mt-50">
            <div class="col-lg-12">
                <h4 class="mb-30">Solid Background</h4>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="card text-white bg--primary">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="card text-white bg--secondary">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Secondary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="card text-white bg-success">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Success card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="card text-white bg-danger">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Danger card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="card text-white bg--warning">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Warning card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="card text-white bg--info">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Info card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="card bg--light">
                    <div class="card-header text-dark">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="card text-white bg-dark">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Dark card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div><!-- row end -->

        <div class="row mb-none-30 mt-50">
            <div class="col-lg-12">
                <h4 class="mb-30">Border card</h4>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="card border--primary">
                    <div class="card-header">Header</div>
                    <div class="card-body text-primary">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="card border--secondary">
                    <div class="card-header">Header</div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Secondary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="card border--success">
                    <div class="card-header">Header</div>
                    <div class="card-body text-success">
                        <h5 class="card-title">Success card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="card border--danger">
                    <div class="card-header">Header</div>
                    <div class="card-body text-danger">
                        <h5 class="card-title">Danger card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="card border--warning">
                    <div class="card-header">Header</div>
                    <div class="card-body text-warning">
                        <h5 class="card-title">Warning card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="card border--info">
                    <div class="card-header">Header</div>
                    <div class="card-body text-info">
                        <h5 class="card-title">Info card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="card border--light">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="card border--dark">
                    <div class="card-header">Header</div>
                    <div class="card-body text-dark">
                        <h5 class="card-title">Dark card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div><!-- row end -->

        <div class="row mt-50 mb-none-30">
            <div class="col-lg-12">
                <h4 class="mb-30">Basic Card</h4>
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="card">
                    <img src="assets/images/card/1.jpg" class="card-img-top" alt="card-image">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text mb-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis iste quasi aut, error aliquam ullam eum incidunt amet repellendus sunt expedita ratione delectus? Ipsa labore tempora reiciendis, autem ad illo quam, quasi, eius architecto quod laborum.</p>
                        <a href="#0" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div><!-- card end -->
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="card">
                    <img src="assets/images/card/2.jpg" class="card-img-top" alt="card-image">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti exercitationem nam minima fugit alias, nemo provident officia recusandae et voluptates maxime magnam facilis quod nostrum hic quaerat aut veritatis repellendus dicta, deleniti tenetur dolorum consectetur. Reprehenderit reiciendis sint sit cum quidem ratione rerum quibusdam culpa enim commodi voluptatibus a hic esse repellat iure aliquam eum, facilis inventore? Tenetur fuga est nihil doloribus dolorem dolor.</p>
                    </div>
                </div><!-- card end -->
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="card">
                    <img src="assets/images/card/3.jpg" class="card-img-top" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div><!-- card end -->
            </div>
        </div><!-- row end -->

        <div class="row mt-50 mb-none-30">
            <div class="col-lg-12">
                <h4 class="mb-30">Images</h4>
            </div>
            <div class="col-xl-4 col-sm-6 mb-30">
                <div class="card">
                    <img src="assets/images/card/4.jpg" class="card-img-top" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text mb-15">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div><!-- card end -->
            </div>
            <div class="col-xl-4 col-sm-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text mb-15">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    <img src="assets/images/card/5.jpg" class="card-img-top" alt="image">
                </div><!-- card end-->
            </div>
            <div class="col-xl-4 col-sm-6 mb-30">
                <div class="card bg-dark text-white h-100">
                    <img src="assets/images/card/6.jpg" class="card-img" alt="image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text mb-20">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div><!-- card end -->
            </div>
        </div><!-- row end -->

        <div class="col-lg-12 mt-50">
            <h4 class="mb-30">Card columns</h4>
        </div>
        <div class="card-columns">
            <div class="card">
                <img src="assets/images/card/1.jpg" class="card-img-top" alt="image">
                <div class="card-body">
                    <h5 class="card-title">Card title that wraps to a new line</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card p-3">
                <blockquote class="blockquote mb-0 card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">
                        <small class="text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card">
                <img src="assets/images/card/2.jpg" class="card-img-top" alt="image">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card bg-primary text-white text-center p-3">
                <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                    <footer class="blockquote-footer text-white">
                        <small>
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="assets/images/card/3.jpg" class="card-img-top" alt="image">
            </div>
            <div class="card p-3 text-end">
                <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">
                        <small class="text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane show fade" id="alert">
        <div class="row mb-none-30">
            <div class="col-lg-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Defualt Alerts</h5>
                        <div class="alert alert-primary" role="alert">
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-success" role="alert">
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-warning" role="alert">
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-info" role="alert">
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div><!-- card end -->
            </div>

            <div class="col-lg-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Defualt Alerts with icon</h5>
                        <div class="alert alert-primary" role="alert">
                            <div class="alert__icon"><i class="far fa-bell"></i></div>
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <div class="alert__icon"><i class="far fa-bell"></i></div>
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-success" role="alert">
                            <div class="alert__icon"><i class="far fa-bell"></i></div>
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <div class="alert__icon"><i class="far fa-bell"></i></div>
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-warning" role="alert">
                            <div class="alert__icon"><i class="far fa-bell"></i></div>
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-info" role="alert">
                            <div class="alert__icon"><i class="far fa-bell"></i></div>
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div><!-- card end -->
            </div>

            <div class="col-lg-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Defualt outline Alerts</h5>
                        <div class="alert border border--primary" role="alert">
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert border border--secondary" role="alert">
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert border border--success" role="alert">
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert border border--danger" role="alert">
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert border border--warning" role="alert">
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert border border--info" role="alert">
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div><!-- card end -->
            </div>

            <div class="col-lg-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Defualt outline Alerts with icon</h5>
                        <div class="alert border border--primary" role="alert">
                            <div class="alert__icon bg--primary"><i class="far fa-bell"></i></div>
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert border border--secondary" role="alert">
                            <div class="alert__icon bg--secondary"><i class="far fa-bell"></i></div>
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert border border--success" role="alert">
                            <div class="alert__icon bg--success"><i class="far fa-bell"></i></div>
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert border border--danger" role="alert">
                            <div class="alert__icon bg--danger"><i class="far fa-bell"></i></div>
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert border border--warning" role="alert">
                            <div class="alert__icon bg--warning"><i class="far fa-bell"></i></div>
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert border border--info" role="alert">
                            <div class="alert__icon bg--info"><i class="far fa-bell"></i></div>
                            <p class="alert__message">A simple primary alert—check it out!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div><!-- card end -->
            </div>

        </div><!-- row end -->
    </div>

    <div class="tab-pane show fade" id="chart">
        <div class="row align-items-center mb-30">
            <div class="col-lg-6 col-6">
                <h6 class="page-title">Apex chart</h6>
                <nav aria-label="breadcrumb" class="d-inline-block ml-md-4">
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item">charts</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 col-6 text-end">
                <a href="#" class="btn btn-sm bg--white box--shadow1 text--small">New</a>
                <a href="#" class="btn btn-sm bg--white box--shadow1 text--small">Filters</a>
            </div>
        </div>

        <div class="row mb-none-30">
            <div class="col-xl-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sales report</h5>
                        <div id="apex-line"> </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Social report</h5>
                        <div id="apex-timeline-chart"> </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Social report</h5>
                        <div id="apex-bar-chart"> </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Social report</h5>
                        <div id="apex-gradi-line-chart"> </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Social report</h5>
                        <div id="apex-pie-chart"> </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Social report</h5>
                        <div id="apex-radar-chart"> </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Social report</h5>
                        <div id="apex-circle-chart"> </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Social report</h5>
                        <div id="apex-simple-circle-chart"> </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Social report</h5>
                        <div id="apex-radialBar-chart"> </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Social report</h5>
                        <div id="apex-half-radialBar-chart"> </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Social report</h5>
                        <canvas id="pieChart"></canvas>
                        <!-- <div id="apex-half-radialBar-chart"> </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Social report</h5>
                        <canvas id="donutChart"></canvas>
                        <!-- <div id="apex-half-radialBar-chart"> </div> -->
                    </div>
                </div>
            </div>

        </div><!-- row end -->
    </div>

    <div class="tab-pane show fade" id="data-table">
        <div class="card">
            <div class="card-header">
                <h5 class="0">Basic data table</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="default-data-table table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Users</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thumb"><img src="assets/images/user/3.jpg" alt="image"></div>
                                        <span class="name">Tiger Nixon</span>
                                    </div>
                                </td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>
                                    <ul class="user-table-list">
                                        <li class="user"><img src="assets/images/user/3.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/2.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/1.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="text--small badge badge--success font-weight-normal">approved</span>
                                </td>
                                <td>
                                    <button class="icon-btn" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="icon-btn bg--danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thumb"><img src="assets/images/user/1.jpg" alt="image"></div>
                                        <span class="name">Airi Satou</span>
                                    </div>
                                </td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>
                                    <ul class="user-table-list">
                                        <li class="user"><img src="assets/images/user/3.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/2.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/1.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="text--small badge badge--success font-weight-normal">approved</span>
                                </td>
                                <td>
                                    <button class="icon-btn" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="icon-btn bg--danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thumb"><img src="assets/images/user/2.jpg" alt="image"></div>
                                        <span class="name">Angelica Ramos</span>
                                    </div>
                                </td>
                                <td>Chief Executive Officer</td>
                                <td>London</td>
                                <td>
                                    <ul class="user-table-list">
                                        <li class="user"><img src="assets/images/user/3.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/2.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/1.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="text--small badge badge--success font-weight-normal">approved</span>
                                </td>
                                <td>
                                    <button class="icon-btn" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="icon-btn bg--danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thumb"><img src="assets/images/user/3.jpg" alt="image"></div>
                                        <span class="name">Ashton Cox</span>
                                    </div>
                                </td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>
                                    <ul class="user-table-list">
                                        <li class="user"><img src="assets/images/user/3.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/2.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/1.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="text--small badge badge--warning font-weight-normal">Pending</span>
                                </td>
                                <td>
                                    <button class="icon-btn" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="icon-btn bg--danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thumb"><img src="assets/images/user/1.jpg" alt="image"></div>
                                        <span class="name">Bradley Greer</span>
                                    </div>
                                </td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>
                                    <ul class="user-table-list">
                                        <li class="user"><img src="assets/images/user/3.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/2.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/1.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="text--small badge badge--success font-weight-normal">approved</span>
                                </td>
                                <td>
                                    <button class="icon-btn" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="icon-btn bg--danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thumb"><img src="assets/images/user/2.jpg" alt="image"></div>
                                        <span class="name">Brenden Wagner</span>
                                    </div>
                                </td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>
                                    <ul class="user-table-list">
                                        <li class="user"><img src="assets/images/user/3.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/2.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/1.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="text--small badge badge--danger font-weight-normal">rejected</span>
                                </td>
                                <td>
                                    <button class="icon-btn" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="icon-btn bg--danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thumb"><img src="assets/images/user/3.jpg" alt="image"></div>
                                        <span class="name">Tiger Nixon</span>
                                    </div>
                                </td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>
                                    <ul class="user-table-list">
                                        <li class="user"><img src="assets/images/user/3.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/2.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/1.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="text--small badge badge--success font-weight-normal">approved</span>
                                </td>
                                <td>
                                    <button class="icon-btn" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="icon-btn bg--danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thumb"><img src="assets/images/user/1.jpg" alt="image"></div>
                                        <span class="name">Airi Satou</span>
                                    </div>
                                </td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>
                                    <ul class="user-table-list">
                                        <li class="user"><img src="assets/images/user/3.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/2.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/1.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="text--small badge badge--success font-weight-normal">approved</span>
                                </td>
                                <td>
                                    <button class="icon-btn" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="icon-btn bg--danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thumb"><img src="assets/images/user/2.jpg" alt="image"></div>
                                        <span class="name">Angelica Ramos</span>
                                    </div>
                                </td>
                                <td>Chief Executive Officer</td>
                                <td>London</td>
                                <td>
                                    <ul class="user-table-list">
                                        <li class="user"><img src="assets/images/user/3.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/2.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/1.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="text--small badge badge--success font-weight-normal">approved</span>
                                </td>
                                <td>
                                    <button class="icon-btn" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="icon-btn bg--danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thumb"><img src="assets/images/user/3.jpg" alt="image"></div>
                                        <span class="name">Ashton Cox</span>
                                    </div>
                                </td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>
                                    <ul class="user-table-list">
                                        <li class="user"><img src="assets/images/user/3.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/2.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/1.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="text--small badge badge--warning font-weight-normal">Pending</span>
                                </td>
                                <td>
                                    <button class="icon-btn" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="icon-btn bg--danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thumb"><img src="assets/images/user/1.jpg" alt="image"></div>
                                        <span class="name">Bradley Greer</span>
                                    </div>
                                </td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>
                                    <ul class="user-table-list">
                                        <li class="user"><img src="assets/images/user/3.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/2.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/1.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="text--small badge badge--success font-weight-normal">approved</span>
                                </td>
                                <td>
                                    <button class="icon-btn" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="icon-btn bg--danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thumb"><img src="assets/images/user/2.jpg" alt="image"></div>
                                        <span class="name">Brenden Wagner</span>
                                    </div>
                                </td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>
                                    <ul class="user-table-list">
                                        <li class="user"><img src="assets/images/user/3.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/2.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                        <li class="user"><img src="assets/images/user/1.jpg" alt="image" data-bs-toggle="tooltip" data-placement="top" title="Fahaddevs"></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="text--small badge badge--danger font-weight-normal">rejected</span>
                                </td>
                                <td>
                                    <button class="icon-btn" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="icon-btn bg--danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table><!-- tabel end -->
                </div>
            </div>
        </div><!-- card end -->

        <div class="mt-50">
            <div class="card">
                <div class="card-header">
                    <h5 class="0">Basic data table</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="default-data-table table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010/10/14</td>
                                    <td>$327,900</td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009/09/15</td>
                                    <td>$205,500</td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008/12/13</td>
                                    <td>$103,600</td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008/12/19</td>
                                    <td>$90,560</td>
                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013/03/03</td>
                                    <td>$342,000</td>
                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>2008/10/16</td>
                                    <td>$470,600</td>
                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>2012/12/18</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    <td>2010/03/17</td>
                                    <td>$385,750</td>
                                </tr>
                                <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td>2012/11/27</td>
                                    <td>$198,500</td>
                                </tr>
                                <tr>
                                    <td>Paul Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    <td>2010/06/09</td>
                                    <td>$725,000</td>
                                </tr>
                                <tr>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    <td>2009/04/10</td>
                                    <td>$237,500</td>
                                </tr>
                                <tr>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                </tr>
                                <tr>
                                    <td>Dai Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Edinburgh</td>
                                    <td>35</td>
                                    <td>2012/09/26</td>
                                    <td>$217,500</td>
                                </tr>
                                <tr>
                                    <td>Jenette Caldwell</td>
                                    <td>Development Lead</td>
                                    <td>New York</td>
                                    <td>30</td>
                                    <td>2011/09/03</td>
                                    <td>$345,000</td>
                                </tr>
                                <tr>
                                    <td>Yuri Berry</td>
                                    <td>Chief Marketing Officer (CMO)</td>
                                    <td>New York</td>
                                    <td>40</td>
                                    <td>2009/06/25</td>
                                    <td>$675,000</td>
                                </tr>
                                <tr>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td>2011/12/12</td>
                                    <td>$106,450</td>
                                </tr>
                                <tr>
                                    <td>Doris Wilder</td>
                                    <td>Sales Assistant</td>
                                    <td>Sydney</td>
                                    <td>23</td>
                                    <td>2010/09/20</td>
                                    <td>$85,600</td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009/10/09</td>
                                    <td>$1,200,000</td>
                                </tr>
                                <tr>
                                    <td>Gavin Joyce</td>
                                    <td>Developer</td>
                                    <td>Edinburgh</td>
                                    <td>42</td>
                                    <td>2010/12/22</td>
                                    <td>$92,575</td>
                                </tr>
                                <tr>
                                    <td>Jennifer Chang</td>
                                    <td>Regional Director</td>
                                    <td>Singapore</td>
                                    <td>28</td>
                                    <td>2010/11/14</td>
                                    <td>$357,650</td>
                                </tr>
                                <tr>
                                    <td>Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                </tr>
                                <tr>
                                    <td>Fiona Green</td>
                                    <td>Chief Operating Officer (COO)</td>
                                    <td>San Francisco</td>
                                    <td>48</td>
                                    <td>2010/03/11</td>
                                    <td>$850,000</td>
                                </tr>
                                <tr>
                                    <td>Shou Itou</td>
                                    <td>Regional Marketing</td>
                                    <td>Tokyo</td>
                                    <td>20</td>
                                    <td>2011/08/14</td>
                                    <td>$163,000</td>
                                </tr>
                                <tr>
                                    <td>Michelle House</td>
                                    <td>Integration Specialist</td>
                                    <td>Sydney</td>
                                    <td>37</td>
                                    <td>2011/06/02</td>
                                    <td>$95,400</td>
                                </tr>
                                <tr>
                                    <td>Suki Burks</td>
                                    <td>Developer</td>
                                    <td>London</td>
                                    <td>53</td>
                                    <td>2009/10/22</td>
                                    <td>$114,500</td>
                                </tr>
                                <tr>
                                    <td>Jonas Alexander</td>
                                    <td>Developer</td>
                                    <td>San Francisco</td>
                                    <td>30</td>
                                    <td>2010/07/14</td>
                                    <td>$86,500</td>
                                </tr>
                                <tr>
                                    <td>Shad Decker</td>
                                    <td>Regional Director</td>
                                    <td>Edinburgh</td>
                                    <td>51</td>
                                    <td>2008/11/13</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                    <td>2011/06/27</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
                            </tbody>
                        </table><!-- tabel end -->
                    </div>
                </div>
            </div><!-- card end -->
        </div>

        <div class="mt-50">
            <h4 class="mb-20">Basic data table with scroll</h4>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="scroll-vertical-datatable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010/10/14</td>
                                    <td>$327,900</td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009/09/15</td>
                                    <td>$205,500</td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008/12/13</td>
                                    <td>$103,600</td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008/12/19</td>
                                    <td>$90,560</td>
                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013/03/03</td>
                                    <td>$342,000</td>
                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>2008/10/16</td>
                                    <td>$470,600</td>
                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>2012/12/18</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    <td>2010/03/17</td>
                                    <td>$385,750</td>
                                </tr>
                                <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td>2012/11/27</td>
                                    <td>$198,500</td>
                                </tr>
                                <tr>
                                    <td>Paul Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    <td>2010/06/09</td>
                                    <td>$725,000</td>
                                </tr>
                                <tr>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    <td>2009/04/10</td>
                                    <td>$237,500</td>
                                </tr>
                                <tr>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                </tr>
                                <tr>
                                    <td>Dai Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Edinburgh</td>
                                    <td>35</td>
                                    <td>2012/09/26</td>
                                    <td>$217,500</td>
                                </tr>
                                <tr>
                                    <td>Jenette Caldwell</td>
                                    <td>Development Lead</td>
                                    <td>New York</td>
                                    <td>30</td>
                                    <td>2011/09/03</td>
                                    <td>$345,000</td>
                                </tr>
                                <tr>
                                    <td>Yuri Berry</td>
                                    <td>Chief Marketing Officer (CMO)</td>
                                    <td>New York</td>
                                    <td>40</td>
                                    <td>2009/06/25</td>
                                    <td>$675,000</td>
                                </tr>
                                <tr>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td>2011/12/12</td>
                                    <td>$106,450</td>
                                </tr>
                                <tr>
                                    <td>Doris Wilder</td>
                                    <td>Sales Assistant</td>
                                    <td>Sydney</td>
                                    <td>23</td>
                                    <td>2010/09/20</td>
                                    <td>$85,600</td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009/10/09</td>
                                    <td>$1,200,000</td>
                                </tr>
                                <tr>
                                    <td>Gavin Joyce</td>
                                    <td>Developer</td>
                                    <td>Edinburgh</td>
                                    <td>42</td>
                                    <td>2010/12/22</td>
                                    <td>$92,575</td>
                                </tr>
                                <tr>
                                    <td>Jennifer Chang</td>
                                    <td>Regional Director</td>
                                    <td>Singapore</td>
                                    <td>28</td>
                                    <td>2010/11/14</td>
                                    <td>$357,650</td>
                                </tr>
                                <tr>
                                    <td>Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                </tr>
                                <tr>
                                    <td>Fiona Green</td>
                                    <td>Chief Operating Officer (COO)</td>
                                    <td>San Francisco</td>
                                    <td>48</td>
                                    <td>2010/03/11</td>
                                    <td>$850,000</td>
                                </tr>
                                <tr>
                                    <td>Shou Itou</td>
                                    <td>Regional Marketing</td>
                                    <td>Tokyo</td>
                                    <td>20</td>
                                    <td>2011/08/14</td>
                                    <td>$163,000</td>
                                </tr>
                                <tr>
                                    <td>Michelle House</td>
                                    <td>Integration Specialist</td>
                                    <td>Sydney</td>
                                    <td>37</td>
                                    <td>2011/06/02</td>
                                    <td>$95,400</td>
                                </tr>
                                <tr>
                                    <td>Suki Burks</td>
                                    <td>Developer</td>
                                    <td>London</td>
                                    <td>53</td>
                                    <td>2009/10/22</td>
                                    <td>$114,500</td>
                                </tr>
                                <tr>
                                    <td>Jonas Alexander</td>
                                    <td>Developer</td>
                                    <td>San Francisco</td>
                                    <td>30</td>
                                    <td>2010/07/14</td>
                                    <td>$86,500</td>
                                </tr>
                                <tr>
                                    <td>Shad Decker</td>
                                    <td>Regional Director</td>
                                    <td>Edinburgh</td>
                                    <td>51</td>
                                    <td>2008/11/13</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                    <td>2011/06/27</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
                            </tbody>
                        </table><!-- tabel end -->
                    </div>
                </div>
            </div><!-- card end -->
        </div>

        <div class=" mt-50">
            <h4 class="mb-20">Data table with buttons</h4>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="buttons-datatable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010/10/14</td>
                                    <td>$327,900</td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009/09/15</td>
                                    <td>$205,500</td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008/12/13</td>
                                    <td>$103,600</td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008/12/19</td>
                                    <td>$90,560</td>
                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013/03/03</td>
                                    <td>$342,000</td>
                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>2008/10/16</td>
                                    <td>$470,600</td>
                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>2012/12/18</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    <td>2010/03/17</td>
                                    <td>$385,750</td>
                                </tr>
                                <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td>2012/11/27</td>
                                    <td>$198,500</td>
                                </tr>
                                <tr>
                                    <td>Paul Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    <td>2010/06/09</td>
                                    <td>$725,000</td>
                                </tr>
                                <tr>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    <td>2009/04/10</td>
                                    <td>$237,500</td>
                                </tr>
                                <tr>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                </tr>
                                <tr>
                                    <td>Dai Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Edinburgh</td>
                                    <td>35</td>
                                    <td>2012/09/26</td>
                                    <td>$217,500</td>
                                </tr>
                                <tr>
                                    <td>Jenette Caldwell</td>
                                    <td>Development Lead</td>
                                    <td>New York</td>
                                    <td>30</td>
                                    <td>2011/09/03</td>
                                    <td>$345,000</td>
                                </tr>
                                <tr>
                                    <td>Yuri Berry</td>
                                    <td>Chief Marketing Officer (CMO)</td>
                                    <td>New York</td>
                                    <td>40</td>
                                    <td>2009/06/25</td>
                                    <td>$675,000</td>
                                </tr>
                                <tr>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td>2011/12/12</td>
                                    <td>$106,450</td>
                                </tr>
                                <tr>
                                    <td>Doris Wilder</td>
                                    <td>Sales Assistant</td>
                                    <td>Sydney</td>
                                    <td>23</td>
                                    <td>2010/09/20</td>
                                    <td>$85,600</td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009/10/09</td>
                                    <td>$1,200,000</td>
                                </tr>
                                <tr>
                                    <td>Gavin Joyce</td>
                                    <td>Developer</td>
                                    <td>Edinburgh</td>
                                    <td>42</td>
                                    <td>2010/12/22</td>
                                    <td>$92,575</td>
                                </tr>
                                <tr>
                                    <td>Jennifer Chang</td>
                                    <td>Regional Director</td>
                                    <td>Singapore</td>
                                    <td>28</td>
                                    <td>2010/11/14</td>
                                    <td>$357,650</td>
                                </tr>
                                <tr>
                                    <td>Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                </tr>
                                <tr>
                                    <td>Fiona Green</td>
                                    <td>Chief Operating Officer (COO)</td>
                                    <td>San Francisco</td>
                                    <td>48</td>
                                    <td>2010/03/11</td>
                                    <td>$850,000</td>
                                </tr>
                                <tr>
                                    <td>Shou Itou</td>
                                    <td>Regional Marketing</td>
                                    <td>Tokyo</td>
                                    <td>20</td>
                                    <td>2011/08/14</td>
                                    <td>$163,000</td>
                                </tr>
                                <tr>
                                    <td>Michelle House</td>
                                    <td>Integration Specialist</td>
                                    <td>Sydney</td>
                                    <td>37</td>
                                    <td>2011/06/02</td>
                                    <td>$95,400</td>
                                </tr>
                                <tr>
                                    <td>Suki Burks</td>
                                    <td>Developer</td>
                                    <td>London</td>
                                    <td>53</td>
                                    <td>2009/10/22</td>
                                    <td>$114,500</td>
                                </tr>
                                <tr>
                                    <td>Jonas Alexander</td>
                                    <td>Developer</td>
                                    <td>San Francisco</td>
                                    <td>30</td>
                                    <td>2010/07/14</td>
                                    <td>$86,500</td>
                                </tr>
                                <tr>
                                    <td>Shad Decker</td>
                                    <td>Regional Director</td>
                                    <td>Edinburgh</td>
                                    <td>51</td>
                                    <td>2008/11/13</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                    <td>2011/06/27</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
                            </tbody>
                        </table><!-- tabel end -->
                    </div>
                </div>
            </div><!-- card end -->
        </div>


    </div>

    <div class="tab-pane show fade" id="input">
        <div class="row align-items-center mb-30">
            <div class="col-lg-6 col-6">
                <h6 class="page-title">From elements</h6>
                <nav aria-label="breadcrumb" class="d-inline-block ml-md-4">
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item">form</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 col-6 text-end">
                <a href="#" class="btn btn-sm bg--white box--shadow1 text--small">New</a>
                <a href="#" class="btn btn-sm bg--white box--shadow1 text--small">Filters</a>
            </div>
        </div>

        <div class="row mb-none-30">
            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between bg--primary">
                        <h4 class="card-title mb-0 text-white">Basic input field</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#form-1" role="button" aria-expanded="false" aria-controls="form-1"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label class="text-muted text-uppercase">Basic input field</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label class="text-muted text-uppercase">Input field with info text</label>
                                        <input type="text" class="form-control">
                                        <small class="form-text text-muted"><i class="las la-info-circle"></i> We'll never share your email with anyone else.</small>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label class="text-muted text-uppercase">square input field</label>
                                        <input type="text" class="form-control b-radius--none">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label class="text-muted text-uppercase">input field with placeholder</label>
                                        <input type="text" class="form-control" placeholder="Basic input field">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label class="text-muted text-uppercase">Rounded input field</label>
                                        <input type="text" class="form-control b-radius--capsule" placeholder="Basic input field">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label class="text-muted text-uppercase">Read only input field</label>
                                        <input class="form-control" type="text" placeholder="Readonly input here..." readonly>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="collapse code-body" id="form-1">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;form&gt;
    &lt;div class="form-row"&gt;
      &lt;div class="form-group col-md-4"&gt;
        &lt;div class="form-group"&gt;
          &lt;label class="text-muted text-uppercase"&gt;Basic input field&lt;/label&gt;
          &lt;input type="text" class="form-control"&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="form-group col-md-4"&gt;
        &lt;div class="form-group"&gt;
          &lt;label class="text-muted text-uppercase"&gt;Input field with info text&lt;/label&gt;
          &lt;input type="text" class="form-control"&gt;
          &lt;small class="form-text text-muted"&gt;&lt;i class="las la-info-circle"&gt;&lt;/i&gt; We'll never share your email with anyone else.&lt;/small&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="form-group col-md-4"&gt;
        &lt;div class="form-group"&gt;
          &lt;label class="text-muted text-uppercase"&gt;square input field&lt;/label&gt;
          &lt;input type="text" class="form-control b-radius--none"&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="form-group col-md-4"&gt;
        &lt;div class="form-group"&gt;
          &lt;label class="text-muted text-uppercase"&gt;input field with placeholder&lt;/label&gt;
          &lt;input type="text" class="form-control" placeholder="Basic input field"&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="form-group col-md-4"&gt;
        &lt;div class="form-group"&gt;
          &lt;label class="text-muted text-uppercase"&gt;Rounded input field&lt;/label&gt;
          &lt;input type="text" class="form-control b-radius--capsule" placeholder="Basic input field"&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="form-group col-md-4"&gt;
        &lt;div class="form-group"&gt;
          &lt;label class="text-muted text-uppercase"&gt;Read only input field&lt;/label&gt;
          &lt;input class="form-control" type="text" placeholder="Readonly input here..." readonly&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/form&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between bg--primary">
                        <h4 class="card-title mb-0 text-white">Textarea field</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#form-2" role="button" aria-expanded="false" aria-controls="form-2"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <label class="text-muted text-uppercase">Example textarea</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="text-muted text-uppercase">textarea with placeholder</label>
                                    <textarea class="form-control" placeholder="Textarea with placeholder"></textarea>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="text-muted text-uppercase">textarea resize off</label>
                                    <textarea class="form-control resize--none"></textarea>
                                </div>
                            </div>
                        </form>
                        <div class="collapse code-body" id="form-2">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;form&gt;
    &lt;div class="form-row"&gt;
      &lt;div class="form-group col-lg-4"&gt;
        &lt;label class="text-muted text-uppercase"&gt;Example textarea&lt;/label&gt;
        &lt;textarea class="form-control"&gt;&lt;/textarea&gt;
      &lt;/div&gt;
      &lt;div class="form-group col-lg-4"&gt;
        &lt;label class="text-muted text-uppercase"&gt;textarea with placeholder&lt;/label&gt;
        &lt;textarea class="form-control" placeholder="Textarea with placeholder"&gt;&lt;/textarea&gt;
      &lt;/div&gt;
      &lt;div class="form-group col-lg-4"&gt;
        &lt;label class="text-muted text-uppercase"&gt;textarea resize off&lt;/label&gt;
        &lt;textarea class="form-control resize--none"&gt;&lt;/textarea&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/form&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between bg--primary">
                        <h4 class="card-title mb-0 text-white">Select Box</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#form-3" role="button" aria-expanded="false" aria-controls="form-3"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <label class="text-muted text-uppercase">Basic select</label>
                                    <select class="form-control">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="text-muted text-uppercase">Custom select</label>
                                    <select class="custom-select">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="text-muted text-uppercase">Multiple select</label>
                                    <select multiple class="form-control">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div class="collapse code-body" id="form-3">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;form&gt;
    &lt;div class="form-row"&gt;
      &lt;div class="form-group col-lg-4"&gt;
        &lt;label class="text-muted text-uppercase"&gt;Basic select&lt;/label&gt;
        &lt;select class="form-control"&gt;
          &lt;option selected&gt;Choose...&lt;/option&gt;
          &lt;option value="1"&gt;One&lt;/option&gt;
          &lt;option value="2"&gt;Two&lt;/option&gt;
          &lt;option value="3"&gt;Three&lt;/option&gt;
        &lt;/select&gt;
      &lt;/div&gt;
      &lt;div class="form-group col-lg-4"&gt;
        &lt;label class="text-muted text-uppercase"&gt;Custom select&lt;/label&gt;
        &lt;select class="custom-select"&gt;
          &lt;option selected&gt;Choose...&lt;/option&gt;
          &lt;option value="1"&gt;One&lt;/option&gt;
          &lt;option value="2"&gt;Two&lt;/option&gt;
          &lt;option value="3"&gt;Three&lt;/option&gt;
        &lt;/select&gt;
      &lt;/div&gt;
      &lt;div class="form-group col-lg-4"&gt;
        &lt;label class="text-muted text-uppercase"&gt;Multiple select&lt;/label&gt;
        &lt;select multiple class="form-control"&gt;
          &lt;option value="1"&gt;One&lt;/option&gt;
          &lt;option value="2"&gt;Two&lt;/option&gt;
          &lt;option value="3"&gt;Three&lt;/option&gt;
        &lt;/select&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/form&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between bg--primary">
                        <h4 class="card-title mb-0 text-white">File upload Box</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#form-4" role="button" aria-expanded="false" aria-controls="form-4"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label class="text-muted text-uppercase">Example file input</label>
                                    <input type="file" class="form-control-file pl-0" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group col-lg-6">
                                    <span class="text-muted text-uppercase label--text">Custom file upload field</span>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="collapse code-body" id="form-4">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;form&gt;
    &lt;div class="form-row"&gt;
      &lt;div class="form-group col-lg-6"&gt;
        &lt;label class="text-muted text-uppercase"&gt;Example file input&lt;/label&gt;
        &lt;input type="file" class="form-control-file pl-0" id="exampleFormControlFile1"&gt;
      &lt;/div&gt;
      &lt;div class="form-group col-lg-6"&gt;
        &lt;span class="text-muted text-uppercase label--text"&gt;Custom file upload field&lt;/span&gt;
        &lt;div class="custom-file"&gt;
          &lt;input type="file" class="custom-file-input" id="customFile"&gt;
          &lt;label class="custom-file-label" for="customFile"&gt;Choose file&lt;/label&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/form&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between bg--primary">
                        <h4 class="card-title mb-0 text-white">Range</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#form-5" role="button" aria-expanded="false" aria-controls="form-5"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label class="text-muted text-uppercase">Basic range</label>
                                    <input type="range" class="custom-range p-0">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="text-muted text-uppercase">By default, range inputs “snap” to integer values</label>
                                    <input type="range" class="custom-range p-0" min="0" max="5" step="0.5">
                                </div>
                            </div>
                        </form>
                        <div class="collapse code-body" id="form-5">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;form&gt;
    &lt;div class="form-row"&gt;
      &lt;div class="form-group col-lg-6"&gt;
        &lt;label class="text-muted text-uppercase"&gt;Basic range&lt;/label&gt;
        &lt;input type="range" class="custom-range p-0"&gt;
      &lt;/div&gt;
      &lt;div class="form-group col-lg-6"&gt;
        &lt;label class="text-muted text-uppercase"&gt;By default, range inputs “snap” to integer values&lt;/label&gt;
        &lt;input type="range" class="custom-range p-0" min="0" max="5" step="0.5"&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/form&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between bg--primary">
                        <h4 class="card-title mb-0 text-white">Inline form</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#form-6" role="button" aria-expanded="false" aria-controls="form-6"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <form class="form-inline">
                            <label class="sr-only" for="inlineFormInputName2">Name</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                            </div>
                            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Remember my preference</label>
                            </div>
                            <button type="submit" class="btn btn-primary my-1">Submit</button>
                        </form>
                        <div class="collapse code-body" id="form-6">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;form class="form-inline"&gt;
    &lt;label class="sr-only" for="inlineFormInputName2"&gt;Name&lt;/label&gt;
    &lt;input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe"&gt;
    &lt;div class="input-group mb-2 mr-sm-2"&gt;
      &lt;div class="input-group-prepend"&gt;
        &lt;div class="input-group-text"&gt;@&lt;/div&gt;
      &lt;/div&gt;
      &lt;input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username"&gt;
    &lt;/div&gt;
    &lt;div class="custom-control custom-checkbox my-1 mr-sm-2"&gt;
      &lt;input type="checkbox" class="custom-control-input" id="customControlInline"&gt;
      &lt;label class="custom-control-label" for="customControlInline"&gt;Remember my preference&lt;/label&gt;
    &lt;/div&gt;
    &lt;button type="submit" class="btn btn-primary my-1"&gt;Submit&lt;/button&gt;
  &lt;/form&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between bg--primary">
                        <h4 class="card-title mb-0 text-white">Auto sizing form</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#form-7" role="button" aria-expanded="false" aria-controls="form-7"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    <label class="sr-only" for="inlineFormInput">Name</label>
                                    <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                                </div>
                                <div class="col-auto">
                                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">@</div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="customControl">
                                        <label class="custom-control-label" for="customControl">Remember my preference</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                </div>
                            </div>
                        </form>
                        <div class="collapse code-body" id="form-7">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;form&gt;
    &lt;div class="form-row align-items-center"&gt;
      &lt;div class="col-auto"&gt;
        &lt;label class="sr-only" for="inlineFormInput"&gt;Name&lt;/label&gt;
        &lt;input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe"&gt;
      &lt;/div&gt;
      &lt;div class="col-auto"&gt;
        &lt;label class="sr-only" for="inlineFormInputGroup"&gt;Username&lt;/label&gt;
        &lt;div class="input-group mb-2"&gt;
          &lt;div class="input-group-prepend"&gt;
            &lt;div class="input-group-text"&gt;@&lt;/div&gt;
          &lt;/div&gt;
          &lt;input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username"&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="col-auto"&gt;
        &lt;div class="custom-control custom-checkbox my-1 mr-sm-2"&gt;
          &lt;input type="checkbox" class="custom-control-input" id="customControlInline"&gt;
          &lt;label class="custom-control-label" for="customControlInline"&gt;Remember my preference&lt;/label&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="col-auto"&gt;
        &lt;button type="submit" class="btn btn-primary mb-2"&gt;Submit&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/form&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between bg--primary">
                        <h4 class="card-title mb-0 text-white">Sizing</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#form-8" role="button" aria-expanded="false" aria-controls="form-8"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <input class="form-control form-control-xl" type="text" placeholder=".form-control-xl">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input class="form-control" type="text" placeholder="Default input">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                                </div>
                            </div>
                        </form>
                        <div class="collapse code-body" id="form-8">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;form&gt;
    &lt;div class="form-row"&gt;
      &lt;div class="form-group col-lg-12"&gt;
        &lt;input class="form-control form-control-xl" type="text" placeholder=".form-control-xl"&gt;
      &lt;/div&gt;
      &lt;div class="form-group col-lg-12"&gt;
        &lt;input class="form-control form-control-lg" type="text" placeholder=".form-control-lg"&gt;
      &lt;/div&gt;
      &lt;div class="form-group col-lg-12"&gt;
        &lt;input class="form-control" type="text" placeholder="Default input"&gt;
      &lt;/div&gt;
      &lt;div class="form-group col-lg-12"&gt;
        &lt;input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/form&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between bg--primary">
                        <h4 class="card-title mb-0 text-white">Default Checkbox</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#form-9" role="button" aria-expanded="false" aria-controls="form-9"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="row mb-none-30">
                            <div class="col-lg-6 mb-30">
                                <!-- Default form-check -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Default checkbox
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                                    <label class="form-check-label" for="defaultCheck2">
                                        Disabled checkbox
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <!-- inline-form-check -->
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                                    <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <!-- custom checkbox bg color -->
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox form-check-primary">
                                        <input type="checkbox" class="custom-control-input" id="customCheck21" checked>
                                        <label class="custom-control-label" for="customCheck21">Primary</label>
                                    </div>
                                    <div class="custom-control custom-checkbox form-check-secondary">
                                        <input type="checkbox" class="custom-control-input" id="customCheck22" checked>
                                        <label class="custom-control-label" for="customCheck22">Secondary</label>
                                    </div>
                                    <div class="custom-control custom-checkbox form-check-success">
                                        <input type="checkbox" class="custom-control-input" id="customCheck23" checked>
                                        <label class="custom-control-label" for="customCheck23">Success</label>
                                    </div>
                                    <div class="custom-control custom-checkbox form-check-info">
                                        <input type="checkbox" class="custom-control-input" id="customCheck24" checked>
                                        <label class="custom-control-label" for="customCheck24">Info</label>
                                    </div>
                                    <div class="custom-control custom-checkbox form-check-warning">
                                        <input type="checkbox" class="custom-control-input" id="customCheck25" checked>
                                        <label class="custom-control-label" for="customCheck25">Warning</label>
                                    </div>
                                    <div class="custom-control custom-checkbox form-check-danger">
                                        <input type="checkbox" class="custom-control-input" id="customCheck26" checked>
                                        <label class="custom-control-label" for="customCheck26">Danger</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <div class="form-group">
                                    <p class="text-muted">Default</p>
                                    <input type="checkbox" checked data-bs-toggle="toggle">
                                </div>
                                <div class="form-group">
                                    <p class="text-muted">Large, normal, small</p>
                                    <input type="checkbox" checked data-bs-toggle="toggle" data-size="large">
                                    <input type="checkbox" checked data-bs-toggle="toggle" data-size="normal">
                                    <input type="checkbox" checked data-bs-toggle="toggle" data-size="small">
                                </div>
                                <div class="form-group">
                                    <p class="text-muted">Color Variations</p>
                                    <input type="checkbox" checked data-bs-toggle="toggle" data-onstyle="primary">
                                    <input type="checkbox" checked data-bs-toggle="toggle" data-onstyle="success">
                                    <input type="checkbox" checked data-bs-toggle="toggle" data-onstyle="info">
                                    <input type="checkbox" checked data-bs-toggle="toggle" data-onstyle="warning">
                                    <input type="checkbox" checked data-bs-toggle="toggle" data-onstyle="danger">
                                    <input type="checkbox" checked data-bs-toggle="toggle" data-onstyle="secondary">
                                </div>
                            </div>
                        </div>
                        <div class="collapse code-body" id="form-9">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;!-- Default form-check --&gt;
  &lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="checkbox" value="" id="defaultCheck1"&gt;
    &lt;label class="form-check-label" for="defaultCheck1"&gt;
      Default checkbox
    &lt;/label&gt;
  &lt;/div&gt;
  &lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled&gt;
    &lt;label class="form-check-label" for="defaultCheck2"&gt;
      Disabled checkbox
    &lt;/label&gt;
  &lt;/div&gt;

  &lt;!-- inline-form-check --&gt;
  &lt;div class="form-check form-check-inline"&gt;
    &lt;input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"&gt;
    &lt;label class="form-check-label" for="inlineCheckbox1"&gt;1&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class="form-check form-check-inline"&gt;
    &lt;input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"&gt;
    &lt;label class="form-check-label" for="inlineCheckbox2"&gt;2&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class="form-check form-check-inline"&gt;
    &lt;input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled&gt;
    &lt;label class="form-check-label" for="inlineCheckbox3"&gt;3 (disabled)&lt;/label&gt;
  &lt;/div&gt;

  &lt;!-- custom checkbox bg color --&gt;
  &lt;div class="form-group"&gt;
    &lt;div class="custom-control custom-checkbox form-check-primary"&gt;
      &lt;input type="checkbox" class="custom-control-input" id="customCheck21" checked&gt;
      &lt;label class="custom-control-label" for="customCheck21"&gt;Primary&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="custom-control custom-checkbox form-check-secondary"&gt;
      &lt;input type="checkbox" class="custom-control-input" id="customCheck22" checked&gt;
      &lt;label class="custom-control-label" for="customCheck22"&gt;Secondary&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="custom-control custom-checkbox form-check-success"&gt;
      &lt;input type="checkbox" class="custom-control-input" id="customCheck23" checked&gt;
      &lt;label class="custom-control-label" for="customCheck23"&gt;Success&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="custom-control custom-checkbox form-check-info"&gt;
      &lt;input type="checkbox" class="custom-control-input" id="customCheck24" checked&gt;
      &lt;label class="custom-control-label" for="customCheck24"&gt;Info&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="custom-control custom-checkbox form-check-warning"&gt;
      &lt;input type="checkbox" class="custom-control-input" id="customCheck25" checked&gt;
      &lt;label class="custom-control-label" for="customCheck25"&gt;Warning&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="custom-control custom-checkbox form-check-danger"&gt;
      &lt;input type="checkbox" class="custom-control-input" id="customCheck26" checked&gt;
      &lt;label class="custom-control-label" for="customCheck26"&gt;Danger&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between bg--primary">
                        <h4 class="card-title mb-0 text-white">Default Checkbox</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#form-10" role="button" aria-expanded="false" aria-controls="form-10"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="row mb-none-30">
                            <div class="col-lg-6 mb-30">
                                <!-- Default radio -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Default radio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Second default radio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                    <label class="form-check-label" for="exampleRadios3">
                                        Disabled radio
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <!-- inline-radio -->
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                                    <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <!-- custom radio checkbox bg color -->
                                <div class="custom-control custom-radio form-check-primary">
                                    <input type="radio" id="customRadio21" name="customRadio21" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="customRadio21">Primary</label>
                                </div>
                                <div class="custom-control custom-radio form-check-secondary">
                                    <input type="radio" id="customRadio22" name="customRadio22" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="customRadio22">Secondary</label>
                                </div>
                                <div class="custom-control custom-radio form-check-success">
                                    <input type="radio" id="customRadio23" name="customRadio23" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="customRadio23">Success</label>
                                </div>
                                <div class="custom-control custom-radio form-check-info">
                                    <input type="radio" id="customRadio24" name="customRadio24" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="customRadio24">Info</label>
                                </div>
                                <div class="custom-control custom-radio form-check-warning">
                                    <input type="radio" id="customRadio25" name="customRadio25" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="customRadio25">Warning</label>
                                </div>
                                <div class="custom-control custom-radio form-check-danger">
                                    <input type="radio" id="customRadio26" name="customRadio26" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="customRadio26">Danger</label>
                                </div>
                            </div>
                        </div>
                        <div class="collapse code-body" id="form-10">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;!-- Default radio --&gt;
  &lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked&gt;
    &lt;label class="form-check-label" for="exampleRadios1"&gt;
      Default radio
    &lt;/label&gt;
  &lt;/div&gt;
  &lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2"&gt;
    &lt;label class="form-check-label" for="exampleRadios2"&gt;
      Second default radio
    &lt;/label&gt;
  &lt;/div&gt;
  &lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled&gt;
    &lt;label class="form-check-label" for="exampleRadios3"&gt;
      Disabled radio
    &lt;/label&gt;
  &lt;/div&gt;

  &lt;!-- inline-radio --&gt;
  &lt;div class="form-check form-check-inline"&gt;
    &lt;input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"&gt;
    &lt;label class="form-check-label" for="inlineRadio1"&gt;1&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class="form-check form-check-inline"&gt;
    &lt;input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"&gt;
    &lt;label class="form-check-label" for="inlineRadio2"&gt;2&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class="form-check form-check-inline"&gt;
    &lt;input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled&gt;
    &lt;label class="form-check-label" for="inlineRadio3"&gt;3 (disabled)&lt;/label&gt;
  &lt;/div&gt;

  &lt;!-- custom radio checkbox bg color --&gt;
  &lt;div class="custom-control custom-radio form-check-primary"&gt;
    &lt;input type="radio" id="customRadio21" name="customRadio21" class="custom-control-input" checked&gt;
    &lt;label class="custom-control-label" for="customRadio21"&gt;Primary&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class="custom-control custom-radio form-check-secondary"&gt;
    &lt;input type="radio" id="customRadio22" name="customRadio22" class="custom-control-input" checked&gt;
    &lt;label class="custom-control-label" for="customRadio22"&gt;Secondary&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class="custom-control custom-radio form-check-success"&gt;
    &lt;input type="radio" id="customRadio23" name="customRadio23" class="custom-control-input" checked&gt;
    &lt;label class="custom-control-label" for="customRadio23"&gt;Success&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class="custom-control custom-radio form-check-info"&gt;
    &lt;input type="radio" id="customRadio24" name="customRadio24" class="custom-control-input" checked&gt;
    &lt;label class="custom-control-label" for="customRadio24"&gt;Info&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class="custom-control custom-radio form-check-warning"&gt;
    &lt;input type="radio" id="customRadio25" name="customRadio25" class="custom-control-input" checked&gt;
    &lt;label class="custom-control-label" for="customRadio25"&gt;Warning&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class="custom-control custom-radio form-check-danger"&gt;
    &lt;input type="radio" id="customRadio26" name="customRadio26" class="custom-control-input" checked&gt;
    &lt;label class="custom-control-label" for="customRadio26"&gt;Danger&lt;/label&gt;
  &lt;/div&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between bg--primary">
                        <h4 class="card-title mb-0 text-white">Select 2 input form</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#form-11" role="button" aria-expanded="false" aria-controls="form-11"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="row mb-none-30">
                            <div class="col-lg-4 mb-30">
                                <!-- basic select-2 -->
                                <select class="select2-basic" name="state">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="OL">Olami</option>
                                    <option value="HU">Huyati</option>
                                    <option value="WU">Wumiyat</option>
                                    <option value="PO">Popiya</option>
                                    <option value="ZI">Zinzaya</option>
                                </select>
                            </div>
                            <div class="col-lg-4 mb-30">
                                <!-- Multiple select-2 -->
                                <select class="select2-multi-select" name="states[]" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="OL">Olami</option>
                                    <option value="HU">Huyati</option>
                                    <option value="WU">Wumiyat</option>
                                    <option value="PO">Popiya</option>
                                    <option value="ZI">Zinzaya</option>
                                </select>
                            </div>
                            <div class="col-lg-4 mb-30">
                                <!-- Multiple select-2 with tokenize -->
                                <select class="select2-auto-tokenize" multiple="multiple">
                                    <option selected="selected">orange</option>
                                    <option>white</option>
                                    <option>purple</option>
                                    <option>pink</option>
                                    <option>red</option>
                                    <option>skyblue</option>
                                </select>
                            </div>
                        </div>
                        <div class="collapse code-body" id="form-11">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;!-- basic select-2 --&gt;
  &lt;select class="select2-basic" name="state"&gt;
    &lt;option value="AL"&gt;Alabama&lt;/option&gt;
    &lt;option value="WY"&gt;Wyoming&lt;/option&gt;
    &lt;option value="OL"&gt;Olami&lt;/option&gt;
    &lt;option value="HU"&gt;Huyati&lt;/option&gt;
    &lt;option value="WU"&gt;Wumiyat&lt;/option&gt;
    &lt;option value="PO"&gt;Popiya&lt;/option&gt;
    &lt;option value="ZI"&gt;Zinzaya&lt;/option&gt;
  &lt;/select&gt;

  &lt;!-- Multiple select-2 --&gt;
  &lt;select class="select2-multi-select" name="states[]" multiple="multiple"&gt;
    &lt;option value="AL"&gt;Alabama&lt;/option&gt;
    &lt;option value="WY"&gt;Wyoming&lt;/option&gt;
    &lt;option value="OL"&gt;Olami&lt;/option&gt;
    &lt;option value="HU"&gt;Huyati&lt;/option&gt;
    &lt;option value="WU"&gt;Wumiyat&lt;/option&gt;
    &lt;option value="PO"&gt;Popiya&lt;/option&gt;
    &lt;option value="ZI"&gt;Zinzaya&lt;/option&gt;
  &lt;/select&gt;

  &lt;!-- Multiple select-2 with tokenize --&gt;
  &lt;select class="select2-auto-tokenize" multiple="multiple"&gt;
    &lt;option selected="selected"&gt;orange&lt;/option&gt;
    &lt;option&gt;white&lt;/option&gt;
    &lt;option&gt;purple&lt;/option&gt;
    &lt;option&gt;pink&lt;/option&gt;
    &lt;option&gt;red&lt;/option&gt;
    &lt;option&gt;skyblue&lt;/option&gt;
  &lt;/select&gt;
                      </code>
                      <code class="language-js">
  &lt;script&gt;
    // js for Multiple select-2 with tokenize
    $(".select2-auto-tokenize").select2({
      tags: true,
      tokenSeparators: [',']
    });
  &lt;/script&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="tab-pane show fade" id="plan">
        <div class="row align-items-center mb-30">
            <div class="col-lg-6 col-6">
                <h6 class="page-title">Price table</h6>
                <nav aria-label="breadcrumb" class="d-inline-block ml-md-4">
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item">price</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 col-6 text-end">
                <a href="#" class="btn btn-sm bg--white box--shadow1 text--small">New</a>
                <a href="#" class="btn btn-sm bg--white box--shadow1 text--small">Filters</a>
            </div>
        </div>

        <div class="row mb-none-30">
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="pricing-table text-center">
                            <h4 class="package-name mb-20">Basic</h4>
                            <span class="price">$32</span>
                            <p>Monthly</p>
                            <ul class="package-features-list mt-50">
                                <li><i class="fas fa-check bg--success"></i> 1GB hosting plan</li>
                                <li><i class="fas fa-check bg--success"></i> 10+ users</li>
                                <li><i class="fas fa-check bg--success"></i> Social media updates</li>
                                <li><i class="fas fa-times bg--danger"></i> Affiliate programmes</li>
                                <li><i class="fas fa-times bg--danger"></i> Connect more users</li>
                                <li><i class="fas fa-times bg--danger"></i> Unlimited Bandwith</li>
                            </ul>
                        </div>
                    </div>
                    <a href="#0" class="btn w-100 bg--primary py-2">Subscribe</a>
                </div><!-- card end -->
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="pricing-table text-center">
                            <h4 class="package-name mb-20">Standard</h4>
                            <span class="price">$64</span>
                            <p>Monthly</p>
                            <ul class="package-features-list mt-50">
                                <li><i class="fas fa-check bg--success"></i> 1GB hosting plan</li>
                                <li><i class="fas fa-check bg--success"></i> 10+ users</li>
                                <li><i class="fas fa-check bg--success"></i> Social media updates</li>
                                <li><i class="fas fa-check bg--success"></i> Affiliate programmes</li>
                                <li><i class="fas fa-times bg--danger"></i> Connect more users</li>
                                <li><i class="fas fa-times bg--danger"></i> Unlimited Bandwith</li>
                            </ul>
                        </div>
                    </div>
                    <a href="#0" class="btn w-100 bg--primary py-2">Subscribe</a>
                </div><!-- card end -->
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="pricing-table text-center">
                            <h4 class="package-name mb-20">Premium</h4>
                            <span class="price">$120</span>
                            <p>Monthly</p>
                            <ul class="package-features-list mt-50">
                                <li><i class="fas fa-check bg--success"></i> 1GB hosting plan</li>
                                <li><i class="fas fa-check bg--success"></i> 10+ users</li>
                                <li><i class="fas fa-check bg--success"></i> Social media updates</li>
                                <li><i class="fas fa-check bg--success"></i> Affiliate programmes</li>
                                <li><i class="fas fa-check bg--success"></i> Connect more users</li>
                                <li><i class="fas fa-check bg--success"></i> Unlimited Bandwith</li>
                            </ul>
                        </div>
                    </div>
                    <a href="#0" class="btn w-100 bg--primary py-2">Subscribe</a>
                </div><!-- card end -->
            </div>
        </div>

        <div class="row mt-50 mb-none-30">
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="pricing-table text-left">
                            <h4 class="package-name mb-20">Basic</h4>
                            <span class="price text--dark ">$32</span>
                            <p>Monthly</p>
                            <ul class="package-features-list mt-50 mb-50">
                                <li><i class="fas fa-check text--success"></i> 1GB hosting plan</li>
                                <li><i class="fas fa-check text--success"></i> 10+ users</li>
                                <li><i class="fas fa-check text--success"></i> Social media updates</li>
                                <li><i class="fas fa-times text--danger"></i> Affiliate programmes</li>
                                <li><i class="fas fa-times text--danger"></i> Connect more users</li>
                                <li><i class="fas fa-times text--danger"></i> Unlimited Bandwith</li>
                            </ul>
                            <a href="#0" class="btn w-100 btn-outline--primary py-2 box--shadow1">Subscribe</a>
                        </div>
                    </div>
                </div><!-- card end -->
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="pricing-table text-left">
                            <h4 class="package-name mb-20">Standard</h4>
                            <span class="price text--dark ">$64</span>
                            <p>Monthly</p>
                            <ul class="package-features-list mt-50 mb-50">
                                <li><i class="fas fa-check text--success"></i> 1GB hosting plan</li>
                                <li><i class="fas fa-check text--success"></i> 10+ users</li>
                                <li><i class="fas fa-check text--success"></i> Social media updates</li>
                                <li><i class="fas fa-check text--success"></i> Affiliate programmes</li>
                                <li><i class="fas fa-times text--danger"></i> Connect more users</li>
                                <li><i class="fas fa-times text--danger"></i> Unlimited Bandwith</li>
                            </ul>
                            <a href="#0" class="btn w-100 btn-outline--primary py-2 box--shadow1">Subscribe</a>
                        </div>
                    </div>
                </div><!-- card end -->
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="pricing-table text-left">
                            <h4 class="package-name mb-20">Premium</h4>
                            <span class="price text--dark ">$120</span>
                            <p>Monthly</p>
                            <ul class="package-features-list mt-50 mb-50">
                                <li><i class="fas fa-check text--success"></i> 1GB hosting plan</li>
                                <li><i class="fas fa-check text--success"></i> 10+ users</li>
                                <li><i class="fas fa-check text--success"></i> Social media updates</li>
                                <li><i class="fas fa-check text--success"></i> Affiliate programmes</li>
                                <li><i class="fas fa-check text--success"></i> Connect more users</li>
                                <li><i class="fas fa-check text--success"></i> Unlimited Bandwith</li>
                            </ul>
                            <a href="#0" class="btn w-100 btn-outline--primary py-2 box--shadow1">Subscribe</a>
                        </div>
                    </div>
                </div><!-- card end -->
            </div>
        </div>
    </div>

    <div class="tab-pane show fade" id="widget">
        <div class="row align-items-center mb-30">
            <div class="col-lg-6 col-6">
                <h6 class="page-title">Widget</h6>
                <nav aria-label="breadcrumb" class="d-inline-block ml-md-4">
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item">widget</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 col-6 text-end">
                <a href="#" class="btn btn-sm bg--white box--shadow1 text--small">New</a>
                <a href="#" class="btn btn-sm bg--white box--shadow1 text--small">Filters</a>
            </div>
        </div>

        <div class="row mb-none-30">
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="widget bb--3 border--success b-radius--10 bg--white p-4 box--shadow2 has--link">
                    <a href="#0" class="item--link"></a>
                    <div class="widget__icon b-radius--rounded bg--success"><i class="las la-cart-arrow-down"></i></div>
                    <div class="widget__content">
                        <p class="text-uppercase text-muted">orders</p>
                        <h2 class="text--success ">345</h2>
                        <p class="stat-down mt-10">
                            <i class="fas fa-arrow-down"></i>
                            7.4%
                            <span>down</span>
                        </p>
                    </div>
                    <div class="widget__arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div><!-- widget end -->
            </div>

            <div class="col-xl-4 col-md-6 mb-30">
                <div class="widget bb--3 border--primary b-radius--10 bg--white p-4 box--shadow2 has--link">
                    <a href="#0" class="item--link"></a>
                    <div class="widget__icon b-radius--rounded bg--primary"><i class="las la-user-plus"></i></div>
                    <div class="widget__content">
                        <p class="text-uppercase text-muted">New client</p>
                        <h2 class="text--primary ">345</h2>
                        <p class="stat-up mt-10">
                            <i class="fas fa-arrow-up"></i>
                            76
                            <span>up</span>
                        </p>
                    </div>
                    <div class="widget__arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div><!-- widget end -->
            </div>

            <div class="col-xl-4 col-md-6 mb-30">
                <div class="widget bb--3 border--info b-radius--10 bg--white p-4 box--shadow2 has--link">
                    <a href="#0" class="item--link"></a>
                    <div class="widget__icon b-radius--rounded bg--info"><i class="las la-hand-holding-usd"></i></div>
                    <div class="widget__content">
                        <p class="text-uppercase text-muted">Profit</p>
                        <h2 class="text--info ">$6,000</h2>
                        <p class="stat-up mt-10">
                            <i class="fas fa-arrow-up"></i>
                            20%
                            <span>up</span>
                        </p>
                    </div>
                    <div class="widget__arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div><!-- widget end -->
            </div>
        </div>

        <div class="row mt-50 mb-none-30">
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="widget-four b-radius--10 bg--white p-4 box--shadow2 hover--effect1">
                    <div class="widget__icon bg--danger">
                        <i class="las la-user-alt"></i>
                    </div>
                    <div class="widget__content">
                        <p class="mb-2">Social enggage</p>
                        <h4>7.03% <span class="badge text--small text--success"><i class="fas fa-arrow-up"></i> 48.6%</span></h4>
                        <div class="progress box--shadow2 b-radius--5 mt-1" style="height: 3px;">
                            <div class="progress-bar bg--danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="text--small">Ratio follower's likes</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="widget-four b-radius--10 bg--white p-4 box--shadow2 hover--effect1">
                    <div class="widget__icon bg--danger">
                        <i class="las la-user-alt"></i>
                    </div>
                    <div class="widget__content">
                        <p class="mb-2">Social enggage</p>
                        <h4>7.03% <span class="badge text--small text--success"><i class="fas fa-arrow-up"></i> 48.6%</span></h4>
                        <div class="progress box--shadow2 b-radius--5 mt-1" style="height: 3px;">
                            <div class="progress-bar bg--danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="text--small">Ratio follower's likes</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="widget-four b-radius--10 bg--white p-4 box--shadow2 hover--effect1">
                    <div class="widget__icon bg--danger">
                        <i class="las la-user-alt"></i>
                    </div>
                    <div class="widget__content">
                        <p class="mb-2">Social enggage</p>
                        <h4>7.03% <span class="badge text--small text--success"><i class="fas fa-arrow-up"></i> 48.6%</span></h4>
                        <div class="progress box--shadow2 b-radius--5 mt-1" style="height: 3px;">
                            <div class="progress-bar bg--danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="text--small">Ratio follower's likes</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-50 mb-none-30">
            <div class="col-xl-3 col-md-4 col-sm-6 mb-30">
                <div class="card bg--gradi-41 box--shadow2 hover--effect1">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <i class="las la-user-plus f-size--56"></i>
                            </div>
                            <div class="col-6 text-center">
                                <span class="text-white text--small">followers</span>
                                <h2 class="text-white">55k</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 mb-30">
                <div class="card bg--gradi-1 box--shadow2 hover--effect1">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <i class="las la-user-plus f-size--56"></i>
                            </div>
                            <div class="col-6 text-center">
                                <span class="text-white text--small">followers</span>
                                <h2 class="text-white">55k</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 mb-30">
                <div class="card bg--gradi-7 box--shadow2 hover--effect1">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <i class="las la-user-plus f-size--56"></i>
                            </div>
                            <div class="col-6 text-center">
                                <span class="text-white text--small">followers</span>
                                <h2 class="text-white">55k</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 mb-30">
                <div class="card bg--gradi-46 box--shadow2 hover--effect1">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <i class="las la-user-plus f-size--56"></i>
                            </div>
                            <div class="col-6 text-center">
                                <span class="text-white text--small">followers</span>
                                <h2 class="text-white">55k</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-50 mb-none-30">
            <div class="col-xl-3 col-md-4 col-sm-6 mb-30">
                <div class="card bg--gradi-47 box--shadow2 hover--effect1">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <i class="las la-user-plus f-size--56"></i>
                            </div>
                            <div class="col-6 text-end">
                                <span class="text-white text--small">followers</span>
                                <h2 class="text-white">55k</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 mb-30">
                <div class="card bg--gradi-39 box--shadow2 hover--effect1">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <i class="las la-user-plus f-size--56"></i>
                            </div>
                            <div class="col-6 text-end">
                                <span class="text-white text--small">followers</span>
                                <h2 class="text-white">55k</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 mb-30">
                <div class="card bg--gradi-35 box--shadow2 hover--effect1">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <i class="las la-user-plus f-size--56"></i>
                            </div>
                            <div class="col-6 text-end">
                                <span class="text-white text--small">followers</span>
                                <h2 class="text-white">55k</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 mb-30">
                <div class="card bg--gradi-28 box--shadow2 hover--effect1">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <i class="las la-user-plus f-size--56"></i>
                            </div>
                            <div class="col-6 text-end">
                                <span class="text-white text--small">followers</span>
                                <h2 class="text-white">55k</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-50 mb-none-30">
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="widget-five b-radius--10 bg--white p-4 box--shadow2 hover--effect1">
                    <div class="widget__icon bg--gradi-8 b-radius--5 box--shadow2">
                        <i class="las la-user-alt"></i>
                    </div>
                    <div class="widget__content">
                        <p class="text--black">Themes development</p>
                        <ul class="mt-2">
                            <li class="d-flex justify-content-between">
                                <span class="text--small">HTML template</span>
                                <strong class="text--small">435</strong>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="text--small">PHP script</span>
                                <strong class="text--small">248</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="widget-five b-radius--10 bg--white p-4 box--shadow2 hover--effect1">
                    <div class="widget__icon bg--gradi-24 b-radius--5 box--shadow2">
                        <i class="las la-user-alt"></i>
                    </div>
                    <div class="widget__content">
                        <p class="text--black">Themes development</p>
                        <ul class="mt-2">
                            <li class="d-flex justify-content-between">
                                <span class="text--small">HTML template</span>
                                <strong class="text--small">435</strong>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="text--small">PHP script</span>
                                <strong class="text--small">248</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="widget-five b-radius--10 bg--white p-4 box--shadow2 hover--effect1">
                    <div class="widget__icon bg--gradi-39 b-radius--5 box--shadow2">
                        <i class="las la-user-alt"></i>
                    </div>
                    <div class="widget__content">
                        <p class="text--black">Themes development</p>
                        <ul class="mt-2">
                            <li class="d-flex justify-content-between">
                                <span class="text--small">HTML template</span>
                                <strong class="text--small">435</strong>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="text--small">PHP script</span>
                                <strong class="text--small">248</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-50 mb-none-30">
            <div class="col-xl-4 col-sm-6 mb-30">
                <div class="widget-two box--shadow2 b-radius--5 bg--white">
                    <i class="las la-user-alt overlay-icon text--primary"></i>
                    <div class="widget-two__icon b-radius--5 bg--primary">
                        <i class="las la-user-alt"></i>
                    </div>
                    <div class="widget-two__content">
                        <h2 class="">16,366</h2>
                        <p>Followers</p>
                    </div>
                </div><!-- widget-two end -->
            </div>

            <div class="col-xl-4 col-sm-6 mb-30">
                <div class="widget-two box--shadow2 b-radius--5 bg--white">
                    <i class="las la-thumbs-up overlay-icon text--pink"></i>
                    <div class="widget-two__icon b-radius--5 bg--pink">
                        <i class="las la-thumbs-up"></i>
                    </div>
                    <div class="widget-two__content">
                        <h2 class="">39,125</h2>
                        <p>Subscribers</p>
                    </div>
                </div><!-- widget-two end -->
            </div>

            <div class="col-xl-4 col-sm-6 mb-30">
                <div class="widget-two box--shadow2 b-radius--5 bg--white">
                    <i class="las la-user-friends overlay-icon text--teal"></i>
                    <div class="widget-two__icon b-radius--5 bg--teal">
                        <i class="las la-user-friends"></i>
                    </div>
                    <div class="widget-two__content">
                        <h2 class="">48,455</h2>
                        <p>Users</p>
                    </div>
                </div><!-- widget-two end -->
            </div>
        </div><!-- row end -->

        <div class="row mt-50 mb-none-30">
            <div class="col-lg-3 mb-30">
                <div class="widget-three box--shadow2 b-radius--5 bg--white">
                    <div class="widget-three__icon b-radius--rounded bg--primary box--shadow2">
                        <i class="las la-user-alt"></i>
                    </div>
                    <div class="widget-three__content">
                        <h2 class="">16,366</h2>
                        <p>Followers</p>
                    </div>
                </div><!-- widget-two end -->
            </div>

            <div class="col-lg-3 mb-30">
                <div class="widget-three box--shadow2 b-radius--5 bg--white">
                    <div class="widget-three__icon b-radius--rounded bg--pink box--shadow2">
                        <i class="las la-thumbs-up"></i>
                    </div>
                    <div class="widget-three__content">
                        <h2 class="">39,125</h2>
                        <p>Subscribers</p>
                    </div>
                </div><!-- widget-two end -->
            </div>

            <div class="col-lg-3 mb-30">
                <div class="widget-three box--shadow2 b-radius--5 bg--white">
                    <div class="widget-three__icon b-radius--rounded bg--teal box--shadow2">
                        <i class="las la-user-friends"></i>
                    </div>
                    <div class="widget-three__content">
                        <h2 class="">48,455</h2>
                        <p>Users</p>
                    </div>
                </div><!-- widget-two end -->
            </div>

            <div class="col-lg-3 mb-30">
                <div class="widget-three box--shadow2 b-radius--5 bg--white">
                    <div class="widget-three__icon b-radius--rounded bg--green box--shadow2">
                        <i class="las la-user-tag"></i>
                    </div>
                    <div class="widget-three__content">
                        <h2 class="">28,735</h2>
                        <p>Customers</p>
                    </div>
                </div><!-- widget-two end -->
            </div>
        </div><!-- row end -->

        <div class="row mb-none-30 mt-50">
            <div class="col-lg-3 mb-30">
                <div class="widget-three box--shadow2 b-radius--5 bg--white">
                    <div class="widget-three__icon b-radius--rounded overlay--primary overlay--opacity-2 box--shadow2">
                        <i class="las la-user-alt text--primary"></i>
                    </div>
                    <div class="widget-three__content">
                        <h2 class="">16,366</h2>
                        <p>Followers</p>
                    </div>
                </div><!-- widget-two end -->
            </div>

            <div class="col-lg-3 mb-30">
                <div class="widget-three box--shadow2 b-radius--5 bg--white">
                    <div class="widget-three__icon b-radius--rounded overlay--pink overlay--opacity-2 box--shadow2">
                        <i class="las la-thumbs-up text--pink"></i>
                    </div>
                    <div class="widget-three__content">
                        <h2 class="">39,125</h2>
                        <p>Subscribers</p>
                    </div>
                </div><!-- widget-two end -->
            </div>

            <div class="col-lg-3 mb-30">
                <div class="widget-three box--shadow2 b-radius--5 bg--white">
                    <div class="widget-three__icon b-radius--rounded overlay--teal overlay--opacity-2 box--shadow2">
                        <i class="las la-user-friends text--teal"></i>
                    </div>
                    <div class="widget-three__content">
                        <h2 class="">48,455</h2>
                        <p>Users</p>
                    </div>
                </div><!-- widget-two end -->
            </div>

            <div class="col-lg-3 mb-30">
                <div class="widget-three box--shadow2 b-radius--5 bg--white">
                    <div class="widget-three__icon b-radius--rounded overlay--green overlay--opacity-2 box--shadow2">
                        <i class="las la-user-tag text--green"></i>
                    </div>
                    <div class="widget-three__content">
                        <h2 class="">28,735</h2>
                        <p>Customers</p>
                    </div>
                </div><!-- widget-two end -->
            </div>
        </div>

        <div class="row mt-50 mb-none-30">
            <div class="col-lg-4 mb-30">
                <div class="card">
                    <div class="card-header mx-auto border-0 pt-4">
                        <div class="avatar avatar--xl">
                            <img class="img-fluid" src="assets/images/user/1.jpg" alt="img placeholder">
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h4>Fahaddevs</h4>
                        <p class="">frontend dev</p>
                        <div class="card-btns d-flex justify-content-between mt-3">
                            <button class="btn btn--info btn--shadow">Follow</button>
                            <button class="btn btn--success btn--shadow">Message</button>
                        </div>
                        <hr class="my-3">
                        <div class="d-flex justify-content-between">
                            <div class="float-left">
                                <i class="las la-star text-warning mr-2"></i> 4.9
                            </div>
                            <div class="float-right">
                                <i class="feather icon-briefcase text-primary mr-50"></i> 37 Projects
                            </div>
                        </div>
                    </div>
                </div><!-- card end-->
            </div>
            <div class="col-lg-4 mb-30">
                <div class="card b-radius--5 overflow-hidden">
                    <div class="card-body p-0">
                        <div class="d-flex p-3 bg--primary">
                            <div class="avatar avatar--lg">
                                <img src="assets/images/user/3.jpg" alt="image">
                            </div>
                            <div class="pl-3">
                                <h4 class="text--white">Fahaddevs</h4>
                                <span class="text--white font-weight-light">frontend dev</span>
                            </div>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Themeforest project
                                <span class="badge bg--info badge-pill">24</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Others project
                                <span class="badge bg--primary badge-pill">36</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Ecommerce template
                                <span class="badge bg--red badge-pill">3</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total project
                                <span class="badge bg--success badge-pill">96</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-30">
                <div class="card">
                    <div class="card-header mx-auto border-0 pt-4">
                        <div class="avatar avatar--xl">
                            <img class="img-fluid" src="assets/images/user/1.jpg" alt="img placeholder">
                        </div>
                    </div>
                    <div class="card-body text-center p-0">
                        <h4>Fahaddevs</h4>
                        <p class="">frontend dev</p>
                        <div class="row mx-0 mt-2">
                            <div class="col-lg-4 py-4 px-2">
                                <i class="fas fa-comments text--info"></i>
                                <span class="text--info">33.3k</span>
                            </div>
                            <div class="col-lg-4 py-4 px-2">
                                <i class="fab fa-facebook-square text--primary"></i>
                                <span class="text--primary">6.8k</span>
                            </div>
                            <div class="col-lg-4 py-4 px-2">
                                <i class="fab fa-youtube text--danger"></i>
                                <span class="text--danger">2.3k</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>


    <div class="tab-pane show fade" id="modal">

        <div class="row align-items-center mb-30">
            <div class="col-lg-6 col-6">
                <h6 class="page-title">Modal</h6>
                <nav aria-label="breadcrumb" class="d-inline-block ml-md-4">
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item">modal</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 col-6 text-end">
                <a href="#" class="btn btn-sm bg--white box--shadow1 text--small">New</a>
                <a href="#" class="btn btn-sm bg--white box--shadow1 text--small">Filters</a>
            </div>
        </div>

        <div class="row mb-none-30">
            <div class="col-lg-4 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">Basic modal</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#mod-1" role="button" aria-expanded="false" aria-controls="mod-1"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-1">Demo modal</button>
                        <!-- Modal -->
                        <div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem aut corporis dolore expedita suscipit praesentium, recusandae nam voluptatum voluptatem porro sequi unde officiis consectetur, fuga voluptate beatae culpa facere deleniti?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse code-body" id="mod-1">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;!-- Button trigger modal --&gt;
  &lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-1"&gt;Basic modal&lt;/button&gt;
  &lt;!-- Modal --&gt;
  &lt;div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true"&gt;
    &lt;div class="modal-dialog"&gt;
      &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
          &lt;h5 class="modal-title"&gt;Modal title&lt;/h5&gt;
          &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
            &lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;
          &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
          &lt;p&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem aut corporis dolore expedita suscipit praesentium, recusandae nam voluptatum voluptatem porro sequi unde officiis consectetur, fuga voluptate beatae culpa facere deleniti?&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class="modal-footer"&gt;
          &lt;button type="button" class="btn btn-secondary" data-dismiss="modal"&gt;Close&lt;/button&gt;
          &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">Scrollable modal</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#mod-2" role="button" aria-expanded="false" aria-controls="mod-2"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-2">Demo modal</button>
                        <!-- Modal -->
                        <div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique dolore mollitia sequi a reiciendis! Iure, architecto! Soluta quam beatae vel minima laudantium officia magni est, facilis labore iure placeat quo voluptatibus amet delectus dicta autem itaque hic in! Perspiciatis accusamus mollitia molestiae at quibusdam nesciunt fuga reiciendis hic earum beatae nemo, sed dolor, sequi nostrum! Quas, iure nesciunt magni veritatis sequi corporis impedit repellat ipsam modi aut sint saepe soluta, velit culpa vitae non? Labore iure, laudantium veritatis aut tenetur rerum dolorem placeat ab ex doloribus sunt quibusdam beatae modi ullam at, nobis facere tempore expedita! Sint deserunt ex qui delectus, nostrum quod iure consequatur mollitia, quos velit rerum maxime, ab adipisci? Quaerat tempora libero eos provident dolor nihil, repudiandae soluta modi odit optio sint accusamus sit aliquid numquam autem quisquam quam minima ratione perferendis a illo expedita ullam corporis assumenda! Cumque debitis nulla quisquam veniam doloribus reiciendis corporis eos in. Aut sit suscipit itaque! Accusantium numquam ex praesentium unde quibusdam provident natus repellendus doloribus, a exercitationem debitis, voluptate maiores eveniet nesciunt, dolores ipsa? Quae fugit dolorum sapiente incidunt quos ipsa nobis, magni facilis ratione fugiat? Debitis rerum dolores cumque deleniti voluptatibus amet! Dicta, esse harum delectus libero error maiores blanditiis quae deleniti porro ab assumenda itaque aperiam voluptas corporis cupiditate aliquid in aspernatur fuga ea sit! Ipsum praesentium error quis illum sed, pariatur voluptates ducimus quidem nostrum? Doloremque nobis architecto magni.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse code-body" id="mod-2">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;!-- Button trigger modal --&gt;
  &lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-2"&gt;Demo modal&lt;/button&gt;
  &lt;!-- Modal --&gt;
  &lt;div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-hidden="true"&gt;
    &lt;div class="modal-dialog modal-dialog-scrollable"&gt;
      &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
          &lt;h5 class="modal-title"&gt;Modal title&lt;/h5&gt;
          &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
            &lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;
          &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
          &lt;p&gt;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique dolore mollitia sequi a reiciendis! Iure, architecto! Soluta quam beatae vel minima laudantium officia magni est, facilis labore iure placeat quo voluptatibus amet delectus dicta autem itaque hic in! Perspiciatis accusamus mollitia molestiae at quibusdam nesciunt fuga reiciendis hic earum beatae nemo, sed dolor, sequi nostrum! Quas, iure nesciunt magni veritatis sequi corporis impedit repellat ipsam modi aut sint saepe soluta, velit culpa vitae non? Labore iure, laudantium veritatis aut tenetur rerum dolorem placeat ab ex doloribus sunt quibusdam beatae modi ullam at, nobis facere tempore expedita! Sint deserunt ex qui delectus, nostrum quod iure consequatur mollitia, quos velit rerum maxime, ab adipisci? Quaerat tempora libero eos provident dolor nihil, repudiandae soluta modi odit optio sint accusamus sit aliquid numquam autem quisquam quam minima ratione perferendis a illo expedita ullam corporis assumenda! Cumque debitis nulla quisquam veniam doloribus reiciendis corporis eos in. Aut sit suscipit itaque! Accusantium numquam ex praesentium unde quibusdam provident natus repellendus doloribus, a exercitationem debitis, voluptate maiores eveniet nesciunt, dolores ipsa? Quae fugit dolorum sapiente incidunt quos ipsa nobis, magni facilis ratione fugiat? Debitis rerum dolores cumque deleniti voluptatibus amet! Dicta, esse harum delectus libero error maiores blanditiis quae deleniti porro ab assumenda itaque aperiam voluptas corporis cupiditate aliquid in aspernatur fuga ea sit! Ipsum praesentium error quis illum sed, pariatur voluptates ducimus quidem nostrum? Doloremque nobis architecto magni.&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class="modal-footer"&gt;
          &lt;button type="button" class="btn btn-secondary" data-dismiss="modal"&gt;Close&lt;/button&gt;
          &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">Vaertically centered</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#mod-3" role="button" aria-expanded="false" aria-controls="mod-3"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-3">Demo modal</button>
                        <!-- Modal -->
                        <div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem aut corporis dolore expedita suscipit praesentium, recusandae nam voluptatum voluptatem porro sequi unde officiis consectetur, fuga voluptate beatae culpa facere deleniti?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse code-body" id="mod-3">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
    &lt;!-- Button trigger modal --&gt;
    &lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-3"&gt;Demo modal&lt;/button&gt;
    &lt;!-- Modal --&gt;
    &lt;div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-hidden="true"&gt;
      &lt;div class="modal-dialog modal-dialog-centered"&gt;
        &lt;div class="modal-content"&gt;
          &lt;div class="modal-header"&gt;
            &lt;h5 class="modal-title"&gt;Modal title&lt;/h5&gt;
            &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
              &lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;
            &lt;/button&gt;
          &lt;/div&gt;
          &lt;div class="modal-body"&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem aut corporis dolore expedita suscipit praesentium, recusandae nam voluptatum voluptatem porro sequi unde officiis consectetur, fuga voluptate beatae culpa facere deleniti?&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class="modal-footer"&gt;
            &lt;button type="button" class="btn btn-secondary" data-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">Extra Large modal</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#mod-4" role="button" aria-expanded="false" aria-controls="mod-4"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-4">Demo modal</button>
                        <!-- Modal -->
                        <div class="modal fade" id="modal-4" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem aut corporis dolore expedita suscipit praesentium, recusandae nam voluptatum voluptatem porro sequi unde officiis consectetur, fuga voluptate beatae culpa facere deleniti?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse code-body" id="mod-4">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;!-- Button trigger modal --&gt;
  &lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-4"&gt;Demo modal&lt;/button&gt;
  &lt;!-- Modal --&gt;
  &lt;div class="modal fade" id="modal-4" tabindex="-1" role="dialog" aria-hidden="true"&gt;
    &lt;div class="modal-dialog modal-xl"&gt;
      &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
          &lt;h5 class="modal-title"&gt;Modal title&lt;/h5&gt;
          &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
            &lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;
          &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
          &lt;p&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem aut corporis dolore expedita suscipit praesentium, recusandae nam voluptatum voluptatem porro sequi unde officiis consectetur, fuga voluptate beatae culpa facere deleniti?&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class="modal-footer"&gt;
          &lt;button type="button" class="btn btn-secondary" data-dismiss="modal"&gt;Close&lt;/button&gt;
          &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">large modal</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#mod-5" role="button" aria-expanded="false" aria-controls="mod-5"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-5">Demo modal</button>
                        <!-- Modal -->
                        <div class="modal fade" id="modal-5" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem aut corporis dolore expedita suscipit praesentium, recusandae nam voluptatum voluptatem porro sequi unde officiis consectetur, fuga voluptate beatae culpa facere deleniti?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse code-body" id="mod-5">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;!-- Button trigger modal --&gt;
  &lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-5"&gt;Demo modal&lt;/button&gt;
  &lt;!-- Modal --&gt;
  &lt;div class="modal fade" id="modal-5" tabindex="-1" role="dialog" aria-hidden="true"&gt;
    &lt;div class="modal-dialog modal-lg"&gt;
      &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
          &lt;h5 class="modal-title"&gt;Modal title&lt;/h5&gt;
          &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
            &lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;
          &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
          &lt;p&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem aut corporis dolore expedita suscipit praesentium, recusandae nam voluptatum voluptatem porro sequi unde officiis consectetur, fuga voluptate beatae culpa facere deleniti?&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class="modal-footer"&gt;
          &lt;button type="button" class="btn btn-secondary" data-dismiss="modal"&gt;Close&lt;/button&gt;
          &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">large modal</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#mod-6" role="button" aria-expanded="false" aria-controls="mod-6"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-6">Demo modal</button>
                        <!-- Modal -->
                        <div class="modal fade" id="modal-6" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem aut corporis dolore expedita suscipit praesentium, recusandae nam voluptatum voluptatem porro sequi unde officiis consectetur, fuga voluptate beatae culpa facere deleniti?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse code-body" id="mod-6">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;!-- Button trigger modal --&gt;
  &lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-6"&gt;Demo modal&lt;/button&gt;
  &lt;!-- Modal --&gt;
  &lt;div class="modal fade" id="modal-6" tabindex="-1" role="dialog" aria-hidden="true"&gt;
    &lt;div class="modal-dialog modal-sm"&gt;
      &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
          &lt;h5 class="modal-title"&gt;Modal title&lt;/h5&gt;
          &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
            &lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;
          &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
          &lt;p&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem aut corporis dolore expedita suscipit praesentium, recusandae nam voluptatum voluptatem porro sequi unde officiis consectetur, fuga voluptate beatae culpa facere deleniti?&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class="modal-footer"&gt;
          &lt;button type="button" class="btn btn-secondary" data-dismiss="modal"&gt;Close&lt;/button&gt;
          &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">Success alert modal</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#mod-7" role="button" aria-expanded="false" aria-controls="mod-7"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn--success" data-bs-toggle="modal" data-bs-target="#modal-7">Demo modal</button>
                        <!-- Modal -->
                        <div class="modal fade" id="modal-7" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <button type="button" class="close ms-auto m-3" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body text-center">
                                        <i class="las la-check-circle f-size--100 text--success mb-15"></i>
                                        <h3 class="text--success mb-15">Congatulations</h3>
                                        <p class="mb-15">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem aut corporis dolore expedita suscipit praesentium.</p>
                                        <button type="button" class="btn btn--success" data-dismiss="modal">Continue</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse code-body" id="mod-7">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;!-- Button trigger modal --&gt;
  &lt;button type="button" class="btn btn--success" data-bs-toggle="modal" data-bs-target="#modal-7"&gt;Demo modal&lt;/button&gt;
  &lt;!-- Modal --&gt;
  &lt;div class="modal fade" id="modal-7" tabindex="-1" role="dialog" aria-hidden="true"&gt;
    &lt;div class="modal-dialog modal-dialog-centered"&gt;
      &lt;div class="modal-content"&gt;
        &lt;button type="button" class="close ms-auto m-3" data-dismiss="modal" aria-label="Close"&gt;
          &lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;
        &lt;/button&gt;
        &lt;div class="modal-body text-center"&gt;
          &lt;i class="las la-check-circle f-size--100 text--success mb-15"&gt;&lt;/i&gt;
          &lt;h3 class="text--success mb-15"&gt;Congatulations&lt;/h3&gt;
          &lt;p class="mb-15"&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem aut corporis dolore expedita suscipit praesentium.&lt;/p&gt;
          &lt;button type="button" class="btn btn--success" data-dismiss="modal"&gt;Continue&lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="m-0">Error alert modal</h4>
                        <a class="open-code-btn float-right" data-bs-toggle="collapse" href="#mod-8" role="button" aria-expanded="false" aria-controls="mod-8"><i class="las la-code"></i></a>
                    </div>
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn--danger" data-bs-toggle="modal" data-bs-target="#modal-8">Demo modal</button>
                        <!-- Modal -->
                        <div class="modal fade" id="modal-8" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <button type="button" class="close ms-auto m-3" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body text-center">
                                        <i class="las la-times-circle f-size--100 text--danger mb-15"></i>
                                        <h3 class="text--danger mb-15">Error: Cannot process your entry!</h3>
                                        <p class="mb-15">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem aut corporis dolore expedita suscipit praesentium.</p>
                                        <button type="button" class="btn btn--danger" data-dismiss="modal">Continue</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse code-body" id="mod-8">
                            <div class="card card-body">
                                <pre>
                      <code class="language-html">
  &lt;!-- Button trigger modal --&gt;
  &lt;button type="button" class="btn btn--danger" data-bs-toggle="modal" data-bs-target="#modal-8"&gt;Demo modal&lt;/button&gt;
  &lt;!-- Modal --&gt;
  &lt;div class="modal fade" id="modal-8" tabindex="-1" role="dialog" aria-hidden="true"&gt;
    &lt;div class="modal-dialog modal-dialog-centered"&gt;
      &lt;div class="modal-content"&gt;
        &lt;button type="button" class="close ms-auto m-3" data-dismiss="modal" aria-label="Close"&gt;
          &lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;
        &lt;/button&gt;
        &lt;div class="modal-body text-center"&gt;
          &lt;i class="las la-times-circle f-size--100 text--danger mb-15"&gt;&lt;/i&gt;
          &lt;h3 class="text--danger mb-15"&gt;Error: Cannot process your entry!&lt;/h3&gt;
          &lt;p class="mb-15"&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem aut corporis dolore expedita suscipit praesentium.&lt;/p&gt;
          &lt;button type="button" class="btn btn--danger" data-dismiss="modal"&gt;Continue&lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</div>