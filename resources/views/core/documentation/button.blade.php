@extends('themes.admin.template')

@section('stylesheets')
  {{-- expr --}}
@endsection

@section('content')
  

    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header">
            <i class="fa fa-edit"></i>

            <h3 class="box-title">Buttons</h3>
          </div>
          <div class="box-body pad table-responsive">
            <p>Various types of buttons. Using the base class <code>.btn</code></p>
            <table class="table table-bordered text-center">
              <tr>
                <th>Normal</th>
                <th>Large <code>.btn-lg</code></th>
                <th>Small <code>.btn-sm</code></th>
                <th>X-Small <code>.btn-xs</code></th>
                <th>Flat <code>.btn-flat</code></th>
                <th>Disabled <code>.disabled</code></th>
              </tr>
              <tr>
                <td>
                  <a href="#" class="btn btn-block btn-default">Default</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-default btn-lg">Default</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-default btn-sm">Default</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-default btn-xs">Default</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-default btn-flat">Default</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-default disabled">Default</a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#" class="btn btn-block btn-primary">Primary</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-primary btn-lg">Primary</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-primary btn-sm">Primary</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-primary btn-xs">Primary</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-primary btn-flat">Primary</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-primary disabled">Primary</a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#" class="btn btn-block btn-success">Success</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-success btn-lg">Success</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-success btn-sm">Success</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-success btn-xs">Success</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-success btn-flat">Success</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-success disabled">Success</a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#" class="btn btn-block btn-info">Info</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-info btn-lg">Info</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-info btn-sm">Info</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-info btn-xs">Info</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-info btn-flat">Info</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-info disabled">Info</a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#" class="btn btn-block btn-danger">Danger</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-danger btn-lg">Danger</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-danger btn-sm">Danger</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-danger btn-xs">Danger</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-danger btn-flat">Danger</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-danger disabled">Danger</a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#" class="btn btn-block btn-warning">Warning</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-warning btn-lg">Warning</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-warning btn-sm">Warning</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-warning btn-xs">Warning</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-warning btn-flat">Warning</a>
                </td>
                <td>
                  <a href="#" class="btn btn-block btn-warning disabled">Warning</a>
                </td>
              </tr>
            </table>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- ./row -->
    <div class="row">
      <div class="col-md-6">
        <!-- Block buttons -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Block Buttons</h3>
          </div>
          <div class="box-body">
            <a href="#" class="btn btn-default btn-block">.btn-block</a>
            <a href="#" class="btn btn-default btn-block btn-flat">.btn-block .btn-flat</a>
            <a href="#" class="btn btn-default btn-block btn-sm">.btn-block .btn-sm</a>
          </div>
        </div>
        <!-- /.box -->

        <!-- Horizontal grouping -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Horizontal Button Group</h3>
          </div>
          <div class="box-body table-responsive pad">
            <p>
              Horizontal button groups are easy to create with bootstrap. Just add your buttons
              inside <code>&lt;div class="btn-group"&gt;&lt;/div&gt;</code>
            </p>

            <table class="table table-bordered">
              <tr>
                <th>Button</th>
                <th>Icons</th>
                <th>Flat</th>
                <th>Dropdown</th>
              </tr>
              <!-- Default -->
              <tr>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-default">Left</a>
                    <a href="#" class="btn btn-default">Middle</a>
                    <a href="#" class="btn btn-default">Right</a>
                  </div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-default"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-default"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-default"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-default btn-flat"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-default btn-flat"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-default btn-flat"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-default">1</a>
                    <a href="#" class="btn btn-default">2</a>

                    <div class="btn-group">
                      <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- ./default -->
              <!-- Info -->
              <tr>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-info">Left</a>
                    <a href="#" class="btn btn-info">Middle</a>
                    <a href="#" class="btn btn-info">Right</a>
                  </div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-info"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-info"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-info"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-info btn-flat"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-info btn-flat"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-info btn-flat"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-info">1</a>
                    <a href="#" class="btn btn-info">2</a>

                    <div class="btn-group">
                      <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- /. info -->
              <!-- /.danger -->
              <tr>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-danger">Left</a>
                    <a href="#" class="btn btn-danger">Middle</a>
                    <a href="#" class="btn btn-danger">Right</a>
                  </div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-danger"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-danger btn-flat"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-danger btn-flat"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-danger btn-flat"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-danger">1</a>
                    <a href="#" class="btn btn-danger">2</a>

                    <div class="btn-group">
                      <a href="#" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- /.danger -->
              <!-- warning -->
              <tr>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-warning">Left</a>
                    <a href="#" class="btn btn-warning">Middle</a>
                    <a href="#" class="btn btn-warning">Right</a>
                  </div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-warning"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-warning"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-warning"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-warning btn-flat"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-warning btn-flat"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-warning btn-flat"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-warning">1</a>
                    <a href="#" class="btn btn-warning">2</a>

                    <div class="btn-group">
                      <a href="#" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- /.warning -->
              <!-- success -->
              <tr>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-success">Left</a>
                    <a href="#" class="btn btn-success">Middle</a>
                    <a href="#" class="btn btn-success">Right</a>
                  </div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-success"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-success"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-success"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-success btn-flat"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-success btn-flat"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-success btn-flat"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-success">1</a>
                    <a href="#" class="btn btn-success">2</a>

                    <div class="btn-group">
                      <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- /.success -->
            </table>
          </div>
        </div>
        <!-- /.box -->

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Button Addon</h3>
          </div>
          <div class="box-body">
            <p>With dropdown</p>

            <div class="input-group margin">
              <div class="input-group-btn">
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                  <span class="fa fa-caret-down"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <!-- /btn-group -->
              <input type="text" class="form-control">
            </div>
            <!-- /input-group -->
            <p>Normal</p>

            <div class="input-group margin">
              <div class="input-group-btn">
                <a href="#" class="btn btn-danger">Action</a>
              </div>
              <!-- /btn-group -->
              <input type="text" class="form-control">
            </div>
            <!-- /input-group -->
            <p>Flat</p>

            <div class="input-group margin">
              <input type="text" class="form-control">
                  <span class="input-group-btn">
                    <a href="#" class="btn btn-info btn-flat">Go!</a>
                  </span>
            </div>
            <!-- /input-group -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <!-- split buttons box -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Split buttons</h3>
          </div>
          <div class="box-body">
            <!-- Split button -->
            <p>Normal split buttons:</p>

            <div class="margin">
              <div class="btn-group">
                <a href="#" class="btn btn-default">Action</a>
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <div class="btn-group">
                <a href="#" class="btn btn-info">Action</a>
                <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <div class="btn-group">
                <a href="#" class="btn btn-danger">Action</a>
                <a href="#" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <div class="btn-group">
                <a href="#" class="btn btn-success">Action</a>
                <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <div class="btn-group">
                <a href="#" class="btn btn-warning">Action</a>
                <a href="#" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
            </div>
            <!-- flat split buttons -->
            <p>Flat split buttons:</p>

            <div class="margin">
              <div class="btn-group">
                <a href="#" class="btn btn-default btn-flat">Action</a>
                <a href="#" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <div class="btn-group">
                <a href="#" class="btn btn-info btn-flat">Action</a>
                <a href="#" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <div class="btn-group">
                <a href="#" class="btn btn-danger btn-flat">Action</a>
                <a href="#" class="btn btn-danger btn-flat dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <div class="btn-group">
                <a href="#" class="btn btn-success btn-flat">Action</a>
                <a href="#" class="btn btn-success btn-flat dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <div class="btn-group">
                <a href="#" class="btn btn-warning btn-flat">Action</a>
                <a href="#" class="btn btn-warning btn-flat dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- end split buttons box -->

        <!-- social buttons -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Social Buttons (By <a href="https://github.com/lipis/bootstrap-social">Lipis</a>)
            </h3>
          </div>
          <div class="box-body">
            <a class="btn btn-block btn-social btn-bitbucket">
              <i class="fa fa-bitbucket"></i> Sign in with Bitbucket
            </a>
            <a class="btn btn-block btn-social btn-dropbox">
              <i class="fa fa-dropbox"></i> Sign in with Dropbox
            </a>
            <a class="btn btn-block btn-social btn-facebook">
              <i class="fa fa-facebook"></i> Sign in with Facebook
            </a>
            <a class="btn btn-block btn-social btn-flickr">
              <i class="fa fa-flickr"></i> Sign in with Flickr
            </a>
            <a class="btn btn-block btn-social btn-foursquare">
              <i class="fa fa-foursquare"></i> Sign in with Foursquare
            </a>
            <a class="btn btn-block btn-social btn-github">
              <i class="fa fa-github"></i> Sign in with GitHub
            </a>
            <a class="btn btn-block btn-social btn-google">
              <i class="fa fa-google-plus"></i> Sign in with Google
            </a>
            <a class="btn btn-block btn-social btn-instagram">
              <i class="fa fa-instagram"></i> Sign in with Instagram
            </a>
            <a class="btn btn-block btn-social btn-linkedin">
              <i class="fa fa-linkedin"></i> Sign in with LinkedIn
            </a>
            <a class="btn btn-block btn-social btn-tumblr">
              <i class="fa fa-tumblr"></i> Sign in with Tumblr
            </a>
            <a class="btn btn-block btn-social btn-twitter">
              <i class="fa fa-twitter"></i> Sign in with Twitter
            </a>
            <a class="btn btn-block btn-social btn-vk">
              <i class="fa fa-vk"></i> Sign in with VK
            </a>
            <br>

            <div class="text-center">
              <a class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
              <a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a>
              <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
              <a class="btn btn-social-icon btn-flickr"><i class="fa fa-flickr"></i></a>
              <a class="btn btn-social-icon btn-foursquare"><i class="fa fa-foursquare"></i></a>
              <a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
              <a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
              <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
              <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
              <a class="btn btn-social-icon btn-tumblr"><i class="fa fa-tumblr"></i></a>
              <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
              <a class="btn btn-social-icon btn-vk"><i class="fa fa-vk"></i></a>
            </div>
          </div>
        </div>
        <!-- /.box -->

      </div>
      <!-- /.col -->
      <div class="col-md-6">
        <!-- Application buttons -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Application Buttons</h3>
          </div>
          <div class="box-body">
            <p>Add the classes <code>.btn.btn-app</code> to an <code>&lt;a></code> tag to achieve the following:</p>
            <a class="btn btn-app">
              <i class="fa fa-edit"></i> Edit
            </a>
            <a class="btn btn-app">
              <i class="fa fa-play"></i> Play
            </a>
            <a class="btn btn-app">
              <i class="fa fa-repeat"></i> Repeat
            </a>
            <a class="btn btn-app">
              <i class="fa fa-pause"></i> Pause
            </a>
            <a class="btn btn-app">
              <i class="fa fa-save"></i> Save
            </a>
            <a class="btn btn-app">
              <span class="badge bg-yellow">3</span>
              <i class="fa fa-bullhorn"></i> Notifications
            </a>
            <a class="btn btn-app">
              <span class="badge bg-green">300</span>
              <i class="fa fa-barcode"></i> Products
            </a>
            <a class="btn btn-app">
              <span class="badge bg-purple">891</span>
              <i class="fa fa-users"></i> Users
            </a>
            <a class="btn btn-app">
              <span class="badge bg-teal">67</span>
              <i class="fa fa-inbox"></i> Orders
            </a>
            <a class="btn btn-app">
              <span class="badge bg-aqua">12</span>
              <i class="fa fa-envelope"></i> Inbox
            </a>
            <a class="btn btn-app">
              <span class="badge bg-red">531</span>
              <i class="fa fa-heart-o"></i> Likes
            </a>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <!-- Various colors -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Different colors</h3>
          </div>
          <div class="box-body">
            <p>Mix and match with various background colors. Use base class <code>.btn</code> and add any available
              <code>.bg-*</code> class</p>
            <!-- You may notice a .margin class added
            here but that's only to make the content
            display correctly without having to use a table-->
            <p>
              <a href="#" class="btn bg-maroon btn-flat margin">.btn.bg-maroon.btn-flat</a>
              <a href="#" class="btn bg-purple btn-flat margin">.btn.bg-purple.btn-flat</a>
              <a href="#" class="btn bg-navy btn-flat margin">.btn.bg-navy.btn-flat</a>
              <a href="#" class="btn bg-orange btn-flat margin">.btn.bg-orange.btn-flat</a>
              <a href="#" class="btn bg-olive btn-flat margin">.btn.bg-olive.btn-flat</a>
            </p>

            <p>
              <a href="#" class="btn bg-maroon margin">.btn.bg-maroon</a>
              <a href="#" class="btn bg-purple margin">.btn.bg-purple</a>
              <a href="#" class="btn bg-navy margin">.btn.bg-navy</a>
              <a href="#" class="btn bg-orange margin">.btn.bg-orange</a>
              <a href="#" class="btn bg-olive margin">.btn.bg-olive</a>
            </p>
          </div>
        </div>
        <!-- /.box -->

        <!-- Vertical grouping -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Vertical Button Group</h3>
          </div>
          <div class="box-body table-responsive pad">

            <p>
              Vertical button groups are easy to create with bootstrap. Just add your buttons
              inside <code>&lt;div class="btn-group-vertical"&gt;&lt;/div&gt;</code>
            </p>

            <table class="table table-bordered">
              <tr>
                <th>Button</th>
                <th>Icons</th>
                <th>Flat</th>
                <th>Dropdown</th>
              </tr>
              <!-- Default -->
              <tr>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-default">Top</a>
                    <a href="#" class="btn btn-default">Middle</a>
                    <a href="#" class="btn btn-default">Bottom</a>
                  </div>
                </td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-default"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-default"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-default"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-default btn-flat"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-default btn-flat"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-default btn-flat"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-default">1</a>
                    <a href="#" class="btn btn-default">2</a>

                    <div class="btn-group">
                      <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- ./default -->
              <!-- Info -->
              <tr>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-info">Top</a>
                    <a href="#" class="btn btn-info">Middle</a>
                    <a href="#" class="btn btn-info">Bottom</a>
                  </div>
                </td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-info"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-info"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-info"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-info btn-flat"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-info btn-flat"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-info btn-flat"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-info">1</a>
                    <a href="#" class="btn btn-info">2</a>

                    <div class="btn-group">
                      <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- /. info -->
              <!-- /.danger -->
              <tr>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-danger">Top</a>
                    <a href="#" class="btn btn-danger">Middle</a>
                    <a href="#" class="btn btn-danger">Bottom</a>
                  </div>
                </td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-danger"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-danger btn-flat"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-danger btn-flat"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-danger btn-flat"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-danger">1</a>
                    <a href="#" class="btn btn-danger">2</a>

                    <div class="btn-group">
                      <a href="#" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- /.danger -->
              <!-- warning -->
              <tr>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-warning">Top</a>
                    <a href="#" class="btn btn-warning">Middle</a>
                    <a href="#" class="btn btn-warning">Bottom</a>
                  </div>
                </td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-warning"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-warning"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-warning"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-warning btn-flat"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-warning btn-flat"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-warning btn-flat"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-warning">1</a>
                    <a href="#" class="btn btn-warning">2</a>

                    <div class="btn-group">
                      <a href="#" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- /.warning -->
              <!-- success -->
              <tr>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-success">Top</a>
                    <a href="#" class="btn btn-success">Middle</a>
                    <a href="#" class="btn btn-success">Bottom</a>
                  </div>
                </td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-success"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-success"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-success"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-success btn-flat"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="btn btn-success btn-flat"><i class="fa fa-align-center"></i></a>
                    <a href="#" class="btn btn-success btn-flat"><i class="fa fa-align-right"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="#" class="btn btn-success">1</a>
                    <a href="#" class="btn btn-success">2</a>

                    <div class="btn-group">
                      <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- /.success -->
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /. row -->

@endsection

@section('scripts')
  {{-- expr --}}
@endsection

