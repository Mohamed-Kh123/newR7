<nav class="dash-sidebar light-sidebar transprent-bg {{ empty($company_settings['site_transparent']) || $company_settings['site_transparent'] == 'on' ? 'transprent-bg' : '' }}">
    <div class="navbar-wrapper">
        <div class="m-header main-logo">
            <a href="{{ route('home') }}" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{ get_file(sidebar_logo()) }}{{ '?' . time() }}" alt="" class="logo logo-lg" />
                {{-- <img src="{{ get_file(sidebar_logo()) }}{{ '?' . time() }}" alt="" class="logo logo-sm" /> --}}
            </a>
        </div>
        <div class="tab-container">
            <div class="tab-sidemenu">
              <ul class="dash-tab-link nav flex-column" role="tablist" id="dash-layout-submenus">
              </ul>
            </div>
            <div class="tab-link">
              <div class="navbar-content">
                <div class="tab-content" id="dash-layout-tab">
                </div>
                <ul class="dash-navbar">
                    {!! getMenu() !!}
                </ul>

                {{-- <ul class="dash-navbar">
                  <li class="dash-item dash-caption">
                    <label>Home</label>
                    <i class="ti ti-home"></i>
                  </li>
                  <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-home"></i></span><span
                        class="dash-mtext">Dashboard</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                      <li class="dash-item">
                        <a class="dash-link" href="../dashboard/index.html">Default</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../dashboard/automotive.html">Automotive</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../dashboard/smarthome.html">Smart Home</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../dashboard/crm.html">CRM</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-caption">
                    <label>PAGES</label>
                    <i class="ti ti-license"></i>
                  </li>
                  <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-license"></i></span><span
                        class="dash-mtext">Pages</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                      <li class="dash-item dash-hasmenu">
                        <a class="dash-link" href="#">Profile<span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/profile-overview.html">Overview 1</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/profile-team.html">Team</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/profile-project.html">Project</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dash-item dash-hasmenu">
                        <a class="dash-link" href="#">User<span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/profile-reports.html">Reports</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/profile-new-user.html">New User</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dash-item dash-hasmenu">
                        <a class="dash-link" href="#">Account<span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/profile-account-setting.html">Setting</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/billing.html">Billing</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/invoice.html">Invoice</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dash-item dash-hasmenu">
                        <a class="dash-link" href="#">Projects<span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/projects-general.html">Projects General</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/projects-timeline.html">Timeline</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/projects-new-project.html">New Project</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../pages/pricing.html" target="_blank">Pricing</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../pages/landingpage.html" target="_blank">Landingpage</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-layout-2"></i></span><span
                        class="dash-mtext">Application</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                      <li class="dash-item">
                        <a class="dash-link" href="../pages/Kanban.html">Kanban</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../pages/wizard.html">Wizard</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../pages/calendar.html">Calendar</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../pages/analytics.html">Analytics</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-shopping-cart"></i></span><span
                        class="dash-mtext">Ecommerce</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                      <li class="dash-item">
                        <a class="dash-link" href="../pages/ecomm-overview.html">Overview</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../pages/ecomm-new-product.html">New Product</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../pages/ecomm-product.html">Product</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../pages/ecomm-product-list.html">Product Lists</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../pages/ecomm-order-list.html">Order Lists</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../pages/ecomm-order-details.html">Order Details</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../pages/ecomm-referral.html">Referral</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link">
                      <span class="dash-micon"><i class="ti ti-lock"></i></span>
                      <span class="dash-mtext">Authentication</span>
                      <span class="dash-arrow"><i data-feather="chevron-right"></i></span>
                    </a>
                    <ul class="dash-submenu">
                      <li class="dash-item">
                        <a href="#!" class="dash-link">
                          Variant 1
                          <span class="dash-arrow"><i data-feather="chevron-right"></i></span>
                        </a>
                        <ul class="dash-submenu">
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/auth-signup-1.html" target="_blank">Sign up</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/auth-signin-1.html" target="_blank">Sign in</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/auth-lock-screen-1.html" target="_blank">Lock Screen</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/auth-step-verification-1.html" target="_blank">2-Step Verification</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dash-item">
                        <a href="#!" class="dash-link">Variant 2<span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/auth-signup-2.html" target="_blank">Sign up</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/auth-signin-2.html" target="_blank">Sign in</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/auth-lock-screen-2.html" target="_blank">Lock Screen</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/auth-step-verification-2.html" target="_blank">2-Step Verification</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dash-item">
                        <a href="#!" class="dash-link">Variant 3<span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/auth-signup-3.html" target="_blank">Sign up</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/auth-signin-3.html" target="_blank">Sign in</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/auth-lock-screen-3.html" target="_blank">Lock Screen</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../pages/auth-step-verification-3.html" target="_blank">2-Step Verification</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-caption">
                    <label>Elements</label>
                    <i class="ti ti-apps"></i>
                  </li>
                  <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-apps"></i></span><span
                        class="dash-mtext">Basic</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_alert.html">Alert</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_button.html">Button</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_badges.html">Badges</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_breadcrumb.html">Breadcrumb</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_card.html">Cards</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_collapse.html">Collapse</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_carousel.html">Carousel</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_dropdowns.html">Dropdowns</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_offcanvas.html">Offcanvas</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_pagination.html">Pagination</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_progress.html">Progress</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_list-group.html">List group</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_modal.html">Modal</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_spinner.html">Spinner</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_tabs.html">Tabs & pills</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_typography.html">Typography</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_tooltip-popover.html">Tooltip & popovers</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_toasts.html">Toasts</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/bc_extra.html">Utilities</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-briefcase"></i></span><span
                        class="dash-mtext">Advance</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/ac_alert.html">Sweet alert</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/ac_datepicker-componant.html">Datepicker</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/ac_lightbox.html">Lightbox</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/ac_modal.html">Modal</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/ac_notification.html">Notification</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/ac_pnotify.html">Pnotify</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/ac_rangeslider.html">Rangeslider</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/ac_syntax_highlighter.html">Syntax highlighter</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/ac_tour.html">Tour</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/ac_treeview.html">Tree view</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-gift"></i></span><span
                        class="dash-mtext">Icons</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/icon-feather.html">Feather</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../elements/icon-tabler.html">Tabler</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-caption">
                    <label>Forms</label>
                    <i class="ti ti-forms"></i>
                  </li>
                  <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-forms"></i></span><span
                        class="dash-mtext">Forms Elements</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form_elements.html">Form Basic</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form_floating.html">Form Floating</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_basic.html">Form Options</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_input_group.html">Input Groups</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_checkbox.html">Checkbox</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_radio.html">Radio</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_switch.html">Switch</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_megaoption.html">Mega option</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-plug"></i></span><span
                        class="dash-mtext">Forms Plugins</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                      <li class="dash-item dash-hasmenu">
                        <a class="dash-link" href="#">Date<span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">
                          <li class="dash-item">
                            <a class="dash-link" href="../forms/form2_datepicker.html">Datepicker</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../forms/form2_daterangepicker.html">Date Range Picker</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../forms/form2_timepicker.html">Timepicker</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dash-item dash-hasmenu">
                        <a class="dash-link" href="#">Select<span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">
                          <li class="dash-item">
                            <a class="dash-link" href="../forms/form2_choices.html">Choices js</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_recaptcha.html">Google reCaptcha</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_inputmask.html">Input Masks</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_clipboard.html">Clipboard</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_nouislider.html">Nouislider</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_switchjs.html">Bootstrap Switch</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_typeahead.html">Typeahead</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-edit"></i></span><span class="dash-mtext">Text
                        Editors</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_tinymce.html">Tinymce</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_quill.html">Quill</a>
                      </li>
                      <li class="dash-item dash-hasmenu">
                        <a class="dash-link" href="#">CK editor<span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">
                          <li class="dash-item">
                            <a class="dash-link" href="../forms/editor-classic.html">classic</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../forms/editor-document.html">Document</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../forms/editor-inline.html">Inline</a>
                          </li>
                          <li class="dash-item">
                            <a class="dash-link" href="../forms/editor-balloon.html">Balloon</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_markdown.html">Markdown</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-notebook"></i></span><span
                        class="dash-mtext">Form Layouts</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_lay-default.html">Layouts</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_lay-multicolumn.html">Multicolumn</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_lay-actionbars.html">Actionbars</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_lay-stickyactionbars.html">Sticky Action bars</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-cloud-upload"></i></span><span
                        class="dash-mtext">File upload</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/file-upload.html">Dropzone</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../forms/form2_flu-uppy.html">Uppy</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item">
                    <a href="../forms/form-validation.html" class="dash-link"><span class="dash-micon"><i
                          class="ti ti-clipboard-check"></i></span><span class="dash-mtext">Form Validation</span></a>
                  </li>
                  <li class="dash-item dash-caption">
                    <label>table</label>
                    <i class="ti ti-table"></i>
                  </li>
                  <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-table"></i></span><span
                        class="dash-mtext">Bootstrap table</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                      <li class="dash-item">
                        <a class="dash-link" href="../table/tbl_bootstrap.html">Basic table</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../table/tbl_sizing.html">Sizing table</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../table/tbl_border.html">Border table</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../table/tbl_styling.html">Styling table</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-database"></i></span><span
                        class="dash-mtext">Data table</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                      <li class="dash-item">
                        <a class="dash-link" href="../table/tbl_dt-simple.html">Basic initialization</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../table/tbl_dt-dynamic-import.html">Dynamic Import</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../table/tbl_dt-render-column-cells.html">Render Column Cells</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../table/tbl_dt-column-manipulation.html">Column Manipulation</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../table/tbl_dt-datetime-sorting.html">Datetime Sorting</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../table/tbl_dt-methods.html">Methods</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../table/tbl_dt-add-rows.html">Add Rows</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../table/tbl_dt-fetch-api.html">Fetch API</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../table/tbl_dt-filters.html">Filters</a>
                      </li>
                      <li class="dash-item">
                        <a class="dash-link" href="../table/tbl_dt-export.html">Export</a>
                      </li>
                    </ul>
                  </li>
                  <!-- ============= -->
                  <li class="dash-item dash-caption">
                    <label>Live 1</label>
                    <i class="ti ti-circle-plus"></i>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-home"></i></span>
                      <span class="dash-mtext">Dashboard</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/taskly" class="dash-link">Project
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/account" class="dash-link">Accounting
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/hrm" class="dash-link">HRM
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/pos" class="dash-link">POS
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/crm" class="dash-link">CRM
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/salesagent" class="dash-link">Sales
                          Agent Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/sales" class="dash-link">Sales
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/vcard" class="dash-link">vCard
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/lms" class="dash-link">LMS
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/holidayz" class="dash-link">Hotel
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/rotas" class="dash-link">Rotas
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/cmms" class="dash-link">CMMS
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/fleet" class="dash-link">Fleet
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/fixequipment/dashboard" class="dash-link">Fix
                          Equipment</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/support-ticket" class="dash-link">Support
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/appointment" class="dash-link">Appointment
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/parking" class="dash-link">Parking
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/couriermanagement" class="dash-link">Courier
                          Management Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/property" class="dash-link">Property
                          Manage</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/beauty" class="dash-link">Beauty Spa
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/gym" class="dash-link">GYM
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/vehicle-booking-dashboard" class="dash-link">Vehicle
                          Booking</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/school" class="dash-link">School
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/music-institute" class="dash-link">Music
                          Institute Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/child-care/dashboard" class="dash-link">Childcare
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/Waste-management/dashboard" class="dash-link">Waste
                          Management Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/cleaning" class="dash-link">Cleaning
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/laundry" class="dash-link">Laundry
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/vehicle-inspection"
                          class="dash-link">Vehicle Inspection</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/machine-repair" class="dash-link">Machine
                          Repair</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/medical/dashboard" class="dash-link">Medical
                          Lab Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/pharmacy/dashboard" class="dash-link">Pharmacy
                          Management Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/car-dealership" class="dash-link">Car
                          Dealership</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/freightmanagementsystem/dashboard"
                          class="dash-link">Freight Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/mobileservice" class="dash-link">Mobile
                          Service</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/insurance" class="dash-link">Insurance
                          Dashboard</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dashboard/tour&travel" class="dash-link">Tour
                          & Travel Management Dashboard</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-caption">
                    <label>Live 1</label>
                    <i class="ti ti-circle-plus"></i>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-users"></i></span>
                      <span class="dash-mtext">User Management</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/users" class="dash-link">User</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/roles" class="dash-link">Role</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-caption">
                    <label>Live 1</label>
                    <i class="ti ti-circle-plus"></i>
                  </li>
                  <li class="dash-item">
                    <a href="https://dash-demo.rajodiya.com/modules/list" class="dash-link d-flex align-items-center">
                      <span class="dash-micon"><i class="ti ti-layout-2"></i></span>
                      <span class="dash-mtext text-center">
                        Add-on Manager
                        <span class="text-center d-block animate-charcter">Premium</span>
                      </span>
                    </a>
                  </li>
                    <li class="dash-item dash-caption">
                      <label>Live 1</label>
                      <i class="ti ti-circle-plus"></i>
                    </li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/product-service" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-shopping-cart"></i></span>
                      <span class="dash-mtext">Items</span></a></li>
                  <li class="dash-item dash-caption">
                    <label>Live 1</label>
                    <i class="ti ti-circle-plus"></i>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/proposal" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-replace"></i></span>
                      <span class="dash-mtext">Proposal</span></a></li>
                  <li class="dash-item dash-caption">
                    <label>Live 1</label>
                    <i class="ti ti-circle-plus"></i>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/retainer" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-device-floppy"></i></span>
                      <span class="dash-mtext">Retainer</span></a></li>
                  <li class="dash-item dash-caption">
                    <label>Live 1</label>
                    <i class="ti ti-circle-plus"></i>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/invoice" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-file-invoice"></i></span>
                      <span class="dash-mtext">Invoice</span></a></li>
                  <li class="dash-item dash-caption">
                    <label>Live 1</label>
                    <i class="ti ti-circle-plus"></i>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-shopping-cart"></i></span>
                      <span class="dash-mtext">Purchases</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/purchases" class="dash-link">Purchase</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/warehouses" class="dash-link">Warehouse</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/warehouses-transfer"
                          class="dash-link">Transfer</span></a></li>
                      <li class="dash-item"><a href="#!" class="dash-link">Report</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/reports-daily-purchases"
                              class="dash-link">Purchase Daily/Monthly Report</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/reports-warehouses" class="dash-link">Warehouse
                              Report</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-caption">
                    <label>Live 2</label>
                    <i class="ti ti-circle-plus"></i>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-square-check"></i></span>
                      <span class="dash-mtext">Projects</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/projects" class="dash-link">Project</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/project-template" class="dash-link">Project
                          Template</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/project_report" class="dash-link">Project
                          Report</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/stages" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-caption">
                    <label>Live 1</label>
                    <i class="ti ti-circle-plus"></i>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-layout-grid-add"></i></span>
                      <span class="dash-mtext">Accounting</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/customer" class="dash-link">Customer</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/vendors" class="dash-link">Vendor</span></a>
                      </li>
                      <li class="dash-item"><a href="#!" class="dash-link">Banking</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/bank-account" class="dash-link">Account</span></a>
                          </li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/chart-of-account" class="dash-link">Chart Of
                              Accounts</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/bank-transfer"
                              class="dash-link">Transfer</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/plaid/transactions" class="dash-link">Bank
                              Sync</span></a></li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="#!" class="dash-link">Income</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/revenue" class="dash-link">Revenue</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/customer-credits-note" class="dash-link">Credit
                              Notes</span></a></li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="#!" class="dash-link">Expense</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/bill" class="dash-link">Bill</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/payment" class="dash-link">Payment</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/debit-note" class="dash-link">Debit
                              Notes</span></a></li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/goal" class="dash-link">Finacial
                          Goal</span></a></li>
                      <li class="dash-item"><a href="#!" class="dash-link">Report</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/transaction"
                              class="dash-link">Transaction</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/account-statement-report"
                              class="dash-link">Account Statement</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/income-summary" class="dash-link">Income
                              Summary</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/expense-summary" class="dash-link">Expense
                              Summary</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/income-vs-expense-summary"
                              class="dash-link">Income Vs Expense</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/tax-summary" class="dash-link">Tax
                              Summary</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/profit-loss-summary"
                              class="dash-link">Profit & Loss</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/invoice-summary" class="dash-link">Invoice
                              Summary</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/bill-summary" class="dash-link">Bill
                              Summary</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/product-stock-report"
                              class="dash-link">Product Stock</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-scale"></i></span>
                      <span class="dash-mtext">DoubleEntry</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/journal-entry" class="dash-link">Journal
                          Account</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/ledger" class="dash-link">Ledger
                          Summary</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/balance-sheet" class="dash-link">Balance
                          Sheet</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/profit-loss" class="dash-link">Profit &
                          Loss</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/trial-balance" class="dash-link">Trial
                          Balance</span></a></li>
                      <li class="dash-item"><a href="#!" class="dash-link">Report</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/sales" class="dash-link">Sales</span></a>
                          </li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/receivables"
                              class="dash-link">Receivables</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/payables"
                              class="dash-link">Payables</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-ti ti-3d-cube-sphere"></i></span>
                      <span class="dash-mtext">HRM</span><span class="dash-arrow"> <i data-feather="chevron-right"></i> </span>
                    </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/employee" class="dash-link">Employee</span></a></li>
                      <li class="dash-item"><a href="#!" class="dash-link">Payroll</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/setsalary" class="dash-link">Set
                              salary</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/payslip" class="dash-link">Payslip</span></a></li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="#!" class="dash-link">Attendance</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/attendance" class="dash-link">Mark
                              Attendance</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/bulkattendance" class="dash-link">Bulk
                              Attendance</span></a></li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/leave" class="dash-link">Manage
                          Leave</span></a></li>
                      <li class="dash-item"><a href="#!" class="dash-link">Performance</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/indicator" class="dash-link">Indicator</span></a>
                          </li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/appraisal" class="dash-link">Appraisal</span></a>
                          </li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/goaltracking" class="dash-link">Goal
                              Tracking</span></a></li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="#!" class="dash-link">Training</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/training" class="dash-link">Training
                              List</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/trainer" class="dash-link">Trainer</span></a></li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="#!" class="dash-link">Recruitment</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/job" class="dash-link">Jobs</span></a>
                          </li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/job/create" class="dash-link">Job
                              Create</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/job-application" class="dash-link">Job
                              Application</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/candidates-job-applications" class="dash-link">Job
                              Candidate</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/job-onboard" class="dash-link">Job
                              On-boarding</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/custom-question" class="dash-link">Custom
                              Question</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/interview-schedule" class="dash-link">Interview
                              Schedule</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/career" class="dash-link">Career</span></a></li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="#!" class="dash-link">HR Admin</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/award" class="dash-link">Award</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/transfer" class="dash-link">Transfer</span></a>
                          </li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/resignation"
                              class="dash-link">Resignation</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/trip" class="dash-link">Trip</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/promotion" class="dash-link">Promotion</span></a>
                          </li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/complaint" class="dash-link">Complaints</span></a>
                          </li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/warning" class="dash-link">Warning</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/termination"
                              class="dash-link">Termination</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/announcement"
                              class="dash-link">Announcement</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/holiday" class="dash-link">Holidays</span></a>
                          </li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/event" class="dash-link">Event</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/document" class="dash-link">Document</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/company-policy" class="dash-link">Company
                          Policy</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/branch" class="dash-link">System
                          Setup</span></a></li>
                      <li class="dash-item"><a href="#!" class="dash-link">Report</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/monthly/attendance"
                              class="dash-link">Monthly Attendance</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/leave" class="dash-link">Leave</span></a>
                          </li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/payroll"
                              class="dash-link">Payroll</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-grid-dots"></i></span>
                      <span class="dash-mtext">POS</span><span class="dash-arrow"> <i data-feather="chevron-right"></i> </span>
                    </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/pos" class="dash-link">Add POS</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/pos" class="dash-link">POS
                          Order</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/barcode/pos" class="dash-link">Print
                          Barcode</span></a></li>
                      <li class="dash-item"><a href="#!" class="dash-link">Report</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/reports-daily-pos" class="dash-link">Pos
                              Daily/Monthly Report</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/reports-pos-vs-purchase" class="dash-link">Pos VS
                              Purchase Report</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-layers-difference"></i></span>
                      <span class="dash-mtext">CRM</span><span class="dash-arrow"> <i data-feather="chevron-right"></i> </span>
                    </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/leads" class="dash-link">Lead</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/deals" class="dash-link">Deal</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/form_builder" class="dash-link">Form
                          Builder</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/pipelines" class="dash-link">System
                          Setup</span></a></li>
                      <li class="dash-item"><a href="#!" class="dash-link">Report</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/lead-report" class="dash-link">Lead</span></a>
                          </li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/deal-report" class="dash-link">Deal</span></a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-file-invoice"></i></span>
                      <span class="dash-mtext">Sales</span><span class="dash-arrow"> <i data-feather="chevron-right"></i> </span>
                    </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/salesaccount" class="dash-link">Account</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/contact" class="dash-link">Contact</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/opportunities"
                          class="dash-link">Opportunities</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/quote" class="dash-link">Quote</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/salesinvoice" class="dash-link">Sales
                          Invoice</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/salesorder" class="dash-link">Sales
                          Order</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/commoncases" class="dash-link">Cases</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/stream" class="dash-link">Stream</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/salesdocument" class="dash-link">Sales
                          Document</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/call" class="dash-link">Calls</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/meetinghub/meeting"
                          class="dash-link">Meeting</span></a></li>
                      <li class="dash-item"><a href="#!" class="dash-link">Report</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/quoteanalytic" class="dash-link">Quote
                              Analytics</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/invoiceanalytic" class="dash-link">Sales
                              Invoice Analytics</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/report/salesorderanalytic" class="dash-link">Sales
                              Order Analytics</span></a></li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/account_type" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-credit-card"></i></span>
                      <span class="dash-mtext">vCard</span><span class="dash-arrow"> <i data-feather="chevron-right"></i> </span>
                    </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/business" class="dash-link">Business</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/card-appointment"
                          class="dash-link">Appointment</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/contacts/show" class="dash-link">Contact</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-book"></i></span>
                      <span class="dash-mtext">LMS</span><span class="dash-arrow"> <i data-feather="chevron-right"></i> </span>
                    </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/course" class="dash-link">Course</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/custom-page" class="dash-link">Custom
                          Page</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/blog" class="dash-link">Blog</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/subscriptions" class="dash-link">Subscriber</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/course-coupon" class="dash-link">Course
                          Coupon</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/student" class="dash-link">Student</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/course_orders" class="dash-link">Course
                          Order</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/course-category" class="dash-link">System
                          Setup</span></a></li>
                      <li class="dash-item"><a href="#!" class="dash-link">Report</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/storeanalytic" class="dash-link">Store
                              Analytics</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-movie"></i></span>
                      <span class="dash-mtext">MovieShowBooking</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/moviecast" class="dash-link">Movie
                          Cast</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/seatingtemplate" class="dash-link">Seating
                          Layout</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/movieshow" class="dash-link">Manage Movie
                          Shows</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/casttype" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-building"></i></span>
                      <span class="dash-mtext">Hotel&Room</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="#!" class="dash-link">Hotel Management</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/hotel-services"
                              class="dash-link">Amenities</span></a></li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="#!" class="dash-link">Rooms</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/hotel-rooms" class="dash-link">Room
                              Types</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/hotel-room-features" class="dash-link">Room
                              Features</span></a></li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/hotel-room-facilities"
                          class="dash-link">Facilities</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/hotel-room-booking"
                          class="dash-link">Booking</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/room-booking-coupon"
                          class="dash-link">Coupons</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/hotel-custom-page" class="dash-link">Custom
                          Page</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/hotel-customer" class="dash-link">Hotel
                          Customer</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/room-booking-bank-transfer" class="dash-link">Bank
                          Transfer Request</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-layout-grid-add"></i></span>
                      <span class="dash-mtext">Rotas</span><span class="dash-arrow"> <i data-feather="chevron-right"></i> </span>
                    </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/rota" class="dash-link">Rota</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/workschedule" class="dash-link">Work
                          Schedule</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/availabilitie"
                          class="dash-link">Availability</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-calculator"></i></span>
                      <span class="dash-mtext">Commission</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/commission-plan" class="dash-link">Commission
                          Plan</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/commission-receipt" class="dash-link">Commission
                          Receipt</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/commission-bank-transfer" class="dash-link">Bank
                          Transfer Request</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-circles"></i></span>
                      <span class="dash-mtext">CMMS</span><span class="dash-arrow"> <i data-feather="chevron-right"></i> </span>
                    </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/location" class="dash-link">Location</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/workorder" class="dash-link">Work
                          Order</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/component" class="dash-link">Components</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/pms" class="dash-link">Pms</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/supplier" class="dash-link">Suppliers</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/cmms_pos" class="dash-link">POs</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-ti ti-notebook"></i></span>
                      <span class="dash-mtext">School & Institute</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/school/admission"
                          class="dash-link">Admission</span></a></li>
                      <li class="dash-item"><a href="#!" class="dash-link">Class</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/school-grade" class="dash-link">Grade</span></a>
                          </li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/classroom" class="dash-link">Class</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/subject" class="dash-link">Subject</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/timetable" class="dash-link">Class
                              Timetable</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/teacher-timetable" class="dash-link">Teacher
                              Timetable</span></a></li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/school-student" class="dash-link">Student</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/school-parent" class="dash-link">Parent</span></a>
                      </li>
                      <li class="dash-item"><a href="#!" class="dash-link">Home Work</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/school-homework" class="dash-link">Home
                              Work</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/viewhomework" class="dash-link">View
                              Home-Work</span></a></li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="#!" class="dash-link">Attendance</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/school-attendance" class="dash-link">Mark
                              Attendance</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/schoolstudent-bulkattendance"
                              class="dash-link">Bulk Attendance</span></a></li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="#!" class="dash-link">Exam</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/examlist" class="dash-link">Exam
                              List</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/examtimetable" class="dash-link">Exam
                              Time-Table</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/examhall" class="dash-link">Exam
                              Hall</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/examhallreceipt" class="dash-link">Exam Hall
                              Receipt</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/managemarks" class="dash-link">Manage
                              Marks</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/examgrade" class="dash-link">Grade</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-ti ti-music"></i></span>
                      <span class="dash-mtext">Music Institute</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/music-student" class="dash-link">Student</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/music-teacher" class="dash-link">Teacher</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/music-instrument"
                          class="dash-link">Instrument</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/music-class" class="dash-link">Class</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/music-lesson" class="dash-link">Lesson</span></a></li>
                      <li class="dash-item"><a href="#!" class="dash-link">Report</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/class-wise/report" class="dash-link">Attendance
                              Report</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-building-hospital"></i></span>
                      <span class="dash-mtext">Childcare</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/child-care/inquiry"
                          class="dash-link">Inquiry</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/child-care/parents"
                          class="dash-link">Parent</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/child-care/childs" class="dash-link">Child</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/child-care/childfee" class="dash-link">Fees</span></a>
                      </li>
                      <li class="dash-item"><a href="#!" class="dash-link">Attendance</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/child-care/child-attendance"
                              class="dash-link">Mark Attendance</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/child-care/bulkattendance" class="dash-link">Bulk
                              Attendance</span></a></li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/child-care/childcare-setup" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-line"></i></span>
                      <span class="dash-mtext">GYM Management</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/gymtrainer" class="dash-link">Trainer</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/gymmember" class="dash-link">Member</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/measurement" class="dash-link">Measurement</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/membership-plan" class="dash-link">Membership
                          Plan</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/workout-plan" class="dash-link">Workout
                          Plan</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/skill" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-car"></i></span>
                      <span class="dash-mtext">Fleet</span><span class="dash-arrow"> <i data-feather="chevron-right"></i> </span>
                    </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/driver" class="dash-link">Driver</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/fleet_customer" class="dash-link">Customer</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/vehicle" class="dash-link">Vehicle</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/booking" class="dash-link">Booking</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/availability"
                          class="dash-link">Availability</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/insurance" class="dash-link">Insurance</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/maintenance" class="dash-link">Maintenance</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/fuel" class="dash-link">Fuel
                          History</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/license" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-calendar-event"></i></span>
                      <span class="dash-mtext">Vehicle Booking</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/vehicle-booking" class="dash-link">Vehicle
                          Bookings</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/routeManage" class="dash-link">Route
                          Manage</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-caravan"></i></span>
                      <span class="dash-mtext">Car Dealership</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/cardealership-product" class="dash-link">Dealership
                          Product</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/cardealership-purchase" class="dash-link">Car
                          Purchase</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/cardealership-sale" class="dash-link">Car
                          Sale</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-plant"></i></span>
                      <span class="dash-mtext">Agriculture</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agriculture-fleet/index" class="dash-link">Agriculture
                          Fleet</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agriculture-process/index"
                          class="dash-link">Agriculture Process</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agriculture-equipment/index"
                          class="dash-link">Agriculture Equipment</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agriculture-claim-type/index" class="dash-link">Claim
                          Type</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agriculture-cycles/index"
                          class="dash-link">Agriculture Cycles</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agriculture-department/index"
                          class="dash-link">Agriculture Department</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agriculture-office/index"
                          class="dash-link">Agriculture Office</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agriculture-canal/index" class="dash-link">Agriculture
                          Canal</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agriculture-season-type/index"
                          class="dash-link">Agriculture Season Type</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agriculture-season/index"
                          class="dash-link">Agriculture Season</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agriculture-service-product/index"
                          class="dash-link">Agriculture Service Product</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agriculture-crop/index" class="dash-link">Agriculture
                          Crop</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agriculture-user/index" class="dash-link">Agriculture
                          Users</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agriculture-cultivation/index"
                          class="dash-link">Agriculture Cultivation</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agriculture-activities/index"
                          class="dash-link">Agriculture Activities</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agriculture-service/index"
                          class="dash-link">Agriculture Services</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-list-check"></i></span>
                      <span class="dash-mtext">Legal Case</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/advocates" class="dash-link">Advocate</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/case-initiator" class="dash-link">Case
                          Initiator</span></a></li>
                      <li class="dash-item"><a href="#!" class="dash-link">Courts Categories</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/courts" class="dash-link">Courts</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/high-courts" class="dash-link">High
                              Courts</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/divisions"
                              class="dash-link">Circuit/Division</span></a></li>
                        </ul>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/cases" class="dash-link">Cases</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/case-expense" class="dash-link">Expense</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/fee-receive" class="dash-link">Fee
                          Receive</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/fees" class="dash-link">Fee/Bills</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-layout-grid-add"></i></span>
                      <span class="dash-mtext">Tour & Travel</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/tour" class="dash-link">Tour</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/tour-bookings-details" class="dash-link">Tour
                          Bookings</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/tourist-inquiry" class="dash-link">Tourist
                          Inquiry</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/tour-season" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-shield-check"></i></span>
                      <span class="dash-mtext">Insurance</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/insurance-policies"
                          class="dash-link">Policies</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/insurances" class="dash-link">Insurance</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/insuranceinvoice"
                          class="dash-link">Invoices</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/policy-type" class="dash-link">Policy
                          Types</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-plane-departure"></i></span>
                      <span class="dash-mtext">Freight</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/freightmanagementsystem/customers"
                          class="dash-link">Customer</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/freightmanagementsystem/booking-request"
                          class="dash-link">Booking</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/freightmanagementsystem/shipping"
                          class="dash-link">Shipping</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/freightmanagementsystem/freight-invoice"
                          class="dash-link">Invoice</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/freightmanagementsystem/price"
                          class="dash-link">System Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-tool"></i></span>
                      <span class="dash-mtext">Garage/Workshop</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/garage-vehicle" class="dash-link">Vehicle</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/garage-service" class="dash-link">Service</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/garage-jobcard" class="dash-link">JobCard</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/garage-vehicletype" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-news"></i></span>
                      <span class="dash-mtext">Newspaper</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/newspaper-distribution" class="dash-link">Distribution
                          Center</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/agent-newspaper" class="dash-link">Agent</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/journalist" class="dash-link">Journalist</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/product" class="dash-link">News
                          Paper</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/info-journalist" class="dash-link">Journalist
                          Information</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/ads/newspaper"
                          class="dash-link">Advertisement</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/newspaper-invoice"
                          class="dash-link">Invoice</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/newspaper/category" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-building-community"></i></span>
                      <span class="dash-mtext">Property Manage</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/property" class="dash-link">Property</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/property-unit" class="dash-link">Units</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/tenant" class="dash-link">Tenant</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/property-invoice" class="dash-link">Invoice</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/property-maintenance-request"
                          class="dash-link">Maintenance Request</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/tenant-document-type" class="dash-link">Document
                          Type</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-ti ti-building-hospital"></i></span>
                      <span class="dash-mtext">Hospital</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/doctor" class="dash-link">Doctors</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/patient" class="dash-link">Patients</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/hospital-appointment"
                          class="dash-link">Appointments</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/medicine" class="dash-link">Medicines</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/hospital-bed" class="dash-link">Bed
                          Management</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/medical-record" class="dash-link">Medical
                          Records</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/specialization" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-ti ti-vaccine"></i></span>
                      <span class="dash-mtext">Medical Lab</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/medical/patients"
                          class="dash-link">Patients</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/medical/patient-card" class="dash-link">Patient
                          Card</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/medical/lab-appointment"
                          class="dash-link">Appointment</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/medical/lab-request" class="dash-link">Lab
                          Request</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/medical/test-unit" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-report-medical"></i></span>
                      <span class="dash-mtext">Pharmacy</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/pharmacy-medicines"
                          class="dash-link">Medicine</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/pharmacy-bills" class="dash-link">Bill</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/pharmacy-invoices"
                          class="dash-link">Invoice</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/pharmacy-medicine-category" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-brush"></i></span>
                      <span class="dash-mtext">Beauty Spa</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/beauty-booking" class="dash-link">Booking</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/beauty-booking-order" class="dash-link">Booking
                          Orders</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/beauty-receipt-index" class="dash-link">Beauty
                          Receipt</span></a></li>
                      <li class="dash-item"><a href="#!" class="dash-link">System Setup</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/beauty-service"
                              class="dash-link">Service</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/beauty-working" class="dash-link">Working
                              Hours</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-border-vertical"></i></span>
                      <span class="dash-mtext">Parking</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/parkings" class="dash-link">Parking</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/parking/payments" class="dash-link">Payment</span></a>
                      </li>
                      <li class="dash-item"><a href="#!" class="dash-link">System Setup</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/parking-slot-type" class="dash-link">Slot
                              Type</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/parking-slot" class="dash-link">Slots</span></a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-headphones"></i></span>
                      <span class="dash-mtext">Support Ticket</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/support-tickets" class="dash-link">Tickets</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/support-ticket-knowledge" class="dash-link">Knowledge
                          Base</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/support-ticket-faq" class="dash-link">FAQ</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/ticket-category" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-bottle"></i></span>
                      <span class="dash-mtext">Dairy Cattle</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/animal" class="dash-link">Animal</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/health" class="dash-link">Health</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/breeding" class="dash-link">Breeding</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/weight" class="dash-link">Weight</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/dailymilksheet" class="dash-link">Daily Milk
                          Sheet</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/milkinventory" class="dash-link">Milk
                          Inventory</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/commulativemilksheet" class="dash-link">Commulative
                          Milk Sheet</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/milkproduct" class="dash-link">Milk
                          Product</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-trash"></i></span>
                      <span class="dash-mtext">Waste Management</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/waste-collections" class="dash-link">Collection
                          Request</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/waste-trips" class="dash-link">Trip</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/waste-inspections"
                          class="dash-link">Inspection</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/waste-category-types" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-ti ti-truck-delivery"></i></span>
                      <span class="dash-mtext">Consignment</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/consignment/product"
                          class="dash-link">Product</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/consignment/consignment"
                          class="dash-link">Consignment</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/consignment/purchase-order" class="dash-link">Purchase
                          Order</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/consignment/sale-order" class="dash-link">Sale
                          Order</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-brightness-down"></i></span>
                      <span class="dash-mtext">Cleaning</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/cleaning-team" class="dash-link">Cleaning
                          Team</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/cleaning-booking" class="dash-link">Booking
                          Request</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/cleaning-inspections"
                          class="dash-link">Inspection</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/cleaning-invoice" class="dash-link">Invoice</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-motorbike"></i></span>
                      <span class="dash-mtext">Vehicle Inspection</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/vehicle-inspection"
                          class="dash-link">Vehicle</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/inspection-request" class="dash-link">Inspection
                          Request</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/inspection-defects-repairs" class="dash-link">Defects
                          And Repairs</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/inspection-list" class="dash-link">Inspection
                          List</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-brand-appstore"></i></span>
                      <span class="dash-mtext">Machine Repair</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/machine-repair" class="dash-link">Machine</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/machine-repair-request" class="dash-link">Repair
                          Request</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/machine-repair-invoice"
                          class="dash-link">Diagnosis</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-tool"></i></span>
                      <span class="dash-mtext">Repair</span><span class="dash-arrow"> <i data-feather="chevron-right"></i> </span>
                    </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/repair-order-request" class="dash-link">Repair
                          Order Request</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/repair-invoice" class="dash-link">Repair
                          Invoice</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-brand-gitlab"></i></span>
                      <span class="dash-mtext">AI</span><span class="dash-arrow"> <i data-feather="chevron-right"></i> </span>
                    </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/aidocument" class="dash-link">AI
                          Document</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/aiimage" class="dash-link">AI Image</span></a>
                      </li>
                      <li class="dash-item"><a href="#!" class="dash-link">History</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/aidocument/history" class="dash-link">AI
                              Document</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/aiimage/history" class="dash-link">AI
                              Image</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-ti ti-glass-full"></i></span>
                      <span class="dash-mtext">Beverage</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/collection-center" class="dash-link">Collection
                          Center</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/raw-material" class="dash-link">Raw
                          Material</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/bill-of-material" class="dash-link">Bill Of
                          Material</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/manufacturing"
                          class="dash-link">Manufacturing</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/packaging" class="dash-link">Packaging</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-shirt"></i></span>
                      <span class="dash-mtext">Laundry</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/laundry_request" class="dash-link">Laundry
                          Request</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/laundry-invoice" class="dash-link">Invoice</span></a>
                      </li>
                      <li class="dash-item"><a href="#!" class="dash-link">System Setup</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/laundry-service"
                              class="dash-link">Services</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/laundry-location"
                              class="dash-link">Location</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/rental" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-home"></i></span>
                      <span class="dash-mtext">Rental</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-coffee"></i></span>
                      <span class="dash-mtext">Catering</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/catering-customer" class="dash-link">Catering
                          Customer</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/menu-selection" class="dash-link">Menu
                          Selection</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/catering-eventdetail" class="dash-link">Event
                          Details</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/catering-invoice" class="dash-link">Catering
                          Invoice</span></a></li>
                      <li class="dash-item"><a href="#!" class="dash-link">System Setup</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/catering-events"
                              class="dash-link">Events</span></a></li>
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/catering-items" class="dash-link">Items</span></a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-user-check"></i></span>
                      <span class="dash-mtext">Sales Agent</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/salesagent" class="dash-link">Sales
                          Agents</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/programs" class="dash-link">Programs</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/salesagent/purchase/order"
                          class="dash-link">Order</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-arrows-split"></i></span>
                      <span class="dash-mtext">Salesforce</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/salesforce/accounts"
                          class="dash-link">Accounts</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/salesforce/contacts"
                          class="dash-link">Contacts</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/salesforce/opportunities"
                          class="dash-link">Opportunities</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/salesforce/leads" class="dash-link">Leads</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/salesforce/cases" class="dash-link">Cases</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/salesforce/tasks" class="dash-link">Tasks</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/salesforce/system-setup" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-device-floppy"></i></span>
                      <span class="dash-mtext">Contract</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/contract" class="dash-link">Contract</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/contract-template" class="dash-link">Contract
                          Template</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/contract_type" class="dash-link">Contract
                          Type</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-file-text"></i></span>
                      <span class="dash-mtext">Documents</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/documents" class="dash-link">Documents</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/documents-template" class="dash-link">Document
                          Template</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/type" class="dash-link">Document
                          Type</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/custom-field" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-circle-plus"></i></span>
                      <span class="dash-mtext">Custom Field</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-shopping-cart"></i></span>
                      <span class="dash-mtext">WooCommerce</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/wp-customer" class="dash-link">Customer</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/wp-product" class="dash-link">Product</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/wp-order" class="dash-link">Order</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/wp-category" class="dash-link">Category</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/wp-coupon" class="dash-link">Coupon</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/wp-tax" class="dash-link">Tax</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-brand-skype"></i></span>
                      <span class="dash-mtext">Shopify</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/shopify-customer"
                          class="dash-link">Customer</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/shopify-product" class="dash-link">Product</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/shopify-order" class="dash-link">Order</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/shopify-category"
                          class="dash-link">Category</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/shopify-coupon" class="dash-link">Coupon</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/indiamart" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-indent-increase"></i></span>
                      <span class="dash-mtext">Indiamart</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-ti ti-letter-s"></i></span>
                      <span class="dash-mtext">Sage</span><span class="dash-arrow"> <i data-feather="chevron-right"></i> </span>
                    </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/sage/ledger-account" class="dash-link">Ledger
                          Account</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/inventory" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-file-invoice"></i></span>
                      <span class="dash-mtext">Inventory</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-calculator"></i></span>
                      <span class="dash-mtext">Assets</span><span class="dash-arrow"> <i data-feather="chevron-right"></i> </span>
                    </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/asset" class="dash-link">Assets</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/assets/history" class="dash-link">History</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/withdraw" class="dash-link">Defective
                          Manage</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-ti ti-archive"></i></span>
                      <span class="dash-mtext">Fix Equipment</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/fixequipment" class="dash-link">Assets</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/fixequipment/licenses"
                          class="dash-link">Licenses</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/fixequipment/accessories"
                          class="dash-link">Accessories</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/fixequipment/consumables"
                          class="dash-link">Consumables</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/fixequipment/components"
                          class="dash-link">Components</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/fixequipment/pre-defined-kit" class="dash-link">Pre
                          Defined Kit</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/fixequipment/maintenance"
                          class="dash-link">Maintenance</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/fixequipment/audit" class="dash-link">Audit</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/fixequipment/locations" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/calender/calenders" class="dash-link">
                      <span class="dash-micon"><i class="ti ti-calendar-event"></i></span>
                      <span class="dash-mtext">Calender</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/zoom-meeting" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-video"></i></span>
                      <span class="dash-mtext">Zoom Meeting</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/googlemeet" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-device-computer-camera"></i></span>
                      <span class="dash-mtext">Google Meet</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-users"></i></span>
                      <span class="dash-mtext">Meeting Hub</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/meetinghub/meeting" class="dash-link">Meeting
                          list</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/meetinghub/meeting-minutes" class="dash-link">Meeting
                          Minutes</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/meetinghub/meetings-report" class="dash-link">Meeting
                          Reports</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/meetinghub/meeting-type" class="dash-link">Meeting
                          Type</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-calendar-time"></i></span>
                      <span class="dash-mtext">Appointment</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/appointments"
                          class="dash-link">Appointments</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/questions" class="dash-link">Questions</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/schedules" class="dash-link">Schedule</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-ti ti-briefcase"></i></span>
                      <span class="dash-mtext">Portfolio</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/portfolio/index"
                          class="dash-link">Portfolio</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/portfolio-category"
                          class="dash-link">Category</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/workflow" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-arrows-split-2"></i></span>
                      <span class="dash-mtext">Workflow</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/spreadsheet" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-file"></i></span>
                      <span class="dash-mtext">Spreadsheet</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/googlesheet" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-table"></i></span>
                      <span class="dash-mtext">Google Sheet</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/findgoogleleads/find-google-leads"
                      class="dash-link"> <span class="dash-micon"><i class="ti ti-search"></i></span>
                      <span class="dash-mtext">Find Google Leads</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-bulb"></i></span>
                      <span class="dash-mtext">Innovation Center</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/challenges" class="dash-link">Upcoming
                          Challenges</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/creativitys" class="dash-link">New
                          Creativity</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/innovation-categories" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a
                      href="https://dash-demo.rajodiya.com/businessprocessmapping/business-process-mapping" class="dash-link">
                      <span class="dash-micon"><i class="ti ti-circle-dashed"></i></span>
                      <span class="dash-mtext">Business Mapping</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-book"></i></span>
                      <span class="dash-mtext">Internalknowledge</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/internalknowledge/book"
                          class="dash-link">Book</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/internalknowledge/article"
                          class="dash-link">Article</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/internalknowledge/myarticle" class="dash-link">My
                          Article</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-phone"></i></span>
                      <span class="dash-mtext">Call Hub</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/callhub" class="dash-link">Call
                          List</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/callhubadvance" class="dash-link">Call
                          History</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/callhub-report" class="dash-link">Report</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/calltype" class="dash-link">Setup</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/videos" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-video-plus"></i></span>
                      <span class="dash-mtext">Video Hub</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-menu"></i></span>
                      <span class="dash-mtext">Mobile Service</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/mobile-service/pending/request"
                          class="dash-link">Pending Request</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/mobile-service/generate/request"
                          class="dash-link">Create Request</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/mobile-service/get/invoice/data"
                          class="dash-link">Invoice</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/mobile-service/tracking/status"
                          class="dash-link">System Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-package"></i></span>
                      <span class="dash-mtext">Courier</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/courier-management/courier" class="dash-link">Create
                          Courier</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/courier-management/courier/paymentdetails"
                          class="dash-link">Payments</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/courier-management/branch" class="dash-link">System
                          Setup</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-file"></i></span>
                      <span class="dash-mtext">File Sharing</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/files" class="dash-link">Files</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/download-detailes"
                          class="dash-link">Download</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-clipboard-list"></i></span>
                      <span class="dash-mtext">Feedback</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/templates" class="dash-link">Template</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/history" class="dash-link">History</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-mail"></i></span>
                      <span class="dash-mtext">Newsletter</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/newsletter" class="dash-link">Mails</span></a>
                      </li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/newsletter-history"
                          class="dash-link">History</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/mailbox/index" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-mail"></i></span>
                      <span class="dash-mtext">EMail Box</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/sidemenubuilder" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-circle-plus"></i></span>
                      <span class="dash-mtext">Side Menu Builder</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/activitylog" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-activity"></i></span>
                      <span class="dash-mtext">Activity Log</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/notes" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-calendar-event"></i></span>
                      <span class="dash-mtext">Notes</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-calendar"></i></span>
                      <span class="dash-mtext">Team Workload</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/workload" class="dash-link">Overview</span></a></li>
                      <li class="dash-item"><a href="#!" class="dash-link">Settings</span><span class="dash-arrow"> <i
                              data-feather="chevron-right"></i> </span> </a>
                        <ul class="dash-submenu">
                          <li class="dash-item"><a href="https://dash-demo.rajodiya.com/staff-setting" class="dash-link">Staff
                              Shifting</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/todo/to-do" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-ti ti-checkbox"></i></span>
                      <span class="dash-mtext">To Do</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/timetracker" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-ti ti-alarm"></i></span>
                      <span class="dash-mtext">Time Tracker</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/timesheet" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-clock"></i></span>
                      <span class="dash-mtext">Timesheet</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/chatify" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-brand-hipchat"></i></span>
                      <span class="dash-mtext">Messenger</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-man"></i></span>
                      <span class="dash-mtext">Visitors</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/visitors" class="dash-link">Visitors
                          Detail</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/visit-reason" class="dash-link">Visit
                          Purpose</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/visitor-log" class="dash-link">Visitor
                          Log</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/time-line" class="dash-link">Visitor
                          Timeline</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/visitor/reports" class="dash-link">Visitor
                          Reports</span></a></li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/api-docs" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-vector-triangle"></i></span>
                      <span class="dash-mtext">Api Docs</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/helpdesk" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-headphones"></i></span>
                      <span class="dash-mtext">Helpdesk</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="https://dash-demo.rajodiya.com/plans" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-ti ti-zoom-money"></i></span>
                      <span class="dash-mtext">Subscription Plan</span></a></li>
                  <li class="dash-item dash-hasmenu"><a href="#!" class="dash-link"> <span class="dash-micon"><i
                          class="ti ti-settings"></i></span>
                      <span class="dash-mtext">Settings</span><span class="dash-arrow"> <i data-feather="chevron-right"></i>
                      </span> </a>
                    <ul class="dash-submenu">
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/settings" class="dash-link">System
                          Settings</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/print/setting" class="dash-link">Print
                          Settings</span></a></li>
                      <li class="dash-item"><a href="https://dash-demo.rajodiya.com/plan/order" class="dash-link">Order</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="dash-item dash-hasmenu"><a href="../dashboard/x-test.html" class="dash-link"> <span
                        class="dash-micon"><i class="ti ti-ti ti-zoom-money"></i></span>
                      <span class="dash-mtext">Test Link</span></a></li>
                  <!-- ============= -->
                </ul> --}}
              </div>
            </div>
          </div>
        {{-- <div class="navbar-content">
            <ul class="dash-navbar">
                {!! getMenu() !!}
                @stack('custom_side_menu')
            </ul>
        </div> --}}
    </div>
</nav>
