@extends('frontend.layouts.dashboard')
@inject('dateFormat', 'App\Services\DateService')
@section('content')
<div class="row">
    <div class="col-md-12 padding-0">
        <div class="right-panel">					
            <div class="lp-notifaction-area lp-notifaction-error" data-error-msg="Something went wrong!">
                <div class="lp-notifaction-area-outer">
                    <div class="lp-notifi-icons"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAE2SURBVFhH7dhBaoQwFMZxoZu5w5ygPc7AlF6gF5gLtbNpwVVn7LKQMG4b3c9ZCp1E3jdEEI1JnnGRP7h5Iv4wKmiRy+U8qkT7Wkn1VpblA43Yqn7abSWb+luqRxpNZ3D6oP+zUO+cSIPT57jqc/1p4I7G0xmUwXEibdxJ/j7T2D1OZDAOcSD7y9ruaexfTGR0HIqBZMOhECQ7DvkgF8OhOcjFccgFmQyHxpDJcWgIuRoc6iFl87kqHOqunFQfBtltQr3QrnVkLWsHxHLT7rTZ95y5cvflXgNy6IHo3ZNCHZMhx55WQh6TIV1eJcmQLji0OHIODi2G9MEhdmQIDrEhY+BQdGRMHIqG5MChYKSNC/puHSkIqQ+qOXGoh5TqQOPpvi7N06x/JQF1SI0TQmxolMvl3CuKG6LJpCW33jxQAAAAAElFTkSuQmCC"></div>
                    <div class="lp-notifaction-inner">
                        <h4></h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="dashboard-delete-modal" tabindex="-1" role="dialog" aria-labelledby="dashboard-delete-modal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            are you sure you want to delete?            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary dashboard-confirm-del-btn">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade in active lp-announcement-form padding-bottom-30" id="lp-announcement-form">
                <div class="panel with-nav-tabs panel-default lp-dashboard-tabs col-md-11 align-center">                                            
                    <div class="lp-add-menu-outer clearfix">
                        <h5>All Announcements</h5>
                        <button data-form="announcements" class="lp-add-new-btn add-new-open-form"><span><i class="fa fa-plus" aria-hidden="true"></i></span> Add new</button>
                    </div>
                    <div class="panel-body">
                        <div class="lp-main-title clearfix">
                            <div class="col-md-3"><p>Listing title</p></div>
                            <div class="col-md-7"><p>Description</p></div>
                            <div class="col-md-2"><p class="text-center">On/off</p></div>
                        </div>
                        <div class="tab-content clearfix">
                            <div class="tab-pane fade in active" id="tab1default">
                                <div class="lp-listing-outer-container clearfix lp-coupon-outer-container">
                                    <div class="col-md-3 lp-content-before-after" data-content="Call to action title">
                                        <div class="lp-announcement-title">
                                            <p>Mia Scarlett</p>
                                        </div>
                                    </div>
                                    <div class="col-md-7 lp-content-before-after" data-content="Description">
                                        <div class="lp-deal-title">
                                            <p>We are proud to announce launch of new branch</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center lp-content-before-after" data-content="On/Off">
                                        <div class="clearfix">
                                            <div class="lp-invoices-all-stats-on-off lp-display-inline">
                                                <h5 class="clearfix">
                                                    <label class="switch pull-left">
                                                        <input data-uid="2" data-annID="372-0" checked data-status="active" class="form-control switch-checkbox on-off-ann" type="checkbox" >
                                                        <div class="slider round"></div>
                                                    </label>
                                                </h5>
                                            </div>
                                            <div class="lp-display-inline lp-pull-left-new">
                                                <div class="lp-dot-extra-buttons">
                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABtSURBVEhLYxgFgwN4R2UKekXl7gJhEBsqTDnwiM4N8YrO/Q/GUTlBUGHKAciVntG5O0DYJTSNHyo8UoFnVI61V0yuFZRLHQAyEBZ5PpHZllBhygHIMKjB/6hqMAiADKS6oUMPjGbpUUANwMAAAIAtN4uDPUCkAAAAAElFTkSuQmCC">
                                                    <ul class="lp-user-menu list-style-none">
                                                        <li><a class="ann-edit" href="" data-targetid="372-0" data-annID="372-0" data-uid="2"><i class="fa fa-pencil-square-o"></i><span>Edit</span></a></li>
                                                        <li><a class="ann-del del-this" href="" data-targetID="372-0" data-uid="2"><i class="fa fa-trash-o"></i><span>Delete</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="display: none;" id="update-wrap-372-0" class="panel with-nav-tabs panel-default lp-dashboard-tabs lp-left-panel-height margin-top-30">
                                        <div class="lp-coupns-form-outer">
                                            <div class="lp-voupon-box">
                                                <form class="lp-coupons-form-inner">
                                                    <div class="lp-coupon-box-row">
                                                        <div class="row">
                                                            <div class="form-group col-sm-6 ">
                                                                <div class="margin-bottom-20">
                                                                    <label class="lp-dashboard-top-label" for="announcements-title-372-0">Call to action title</label>
                                                                    <input type="text" class="lp-dashboard-text-field form-control"
                                                                        value="AAAAAAAAAAAAAAAAAAAAAAAAAAA!!!!!!!!!"
                                                                        name="announcements-title-372-0" id="announcements-title-372-0"
                                                                        placeholder="Call to action title"/>
                                                                </div>
                                                                <div class="form-group margin-bottom-20">
                                                                    <label class="lp-dashboard-top-label" for="announcements-icon-372-0">Icon (<a target="_blank" href="https://fontawesome.com/v4.7.0/icons/" style="font-size: 12px; font-weight: 400;">Font Awesome</a>)</label>
                                                                    <input type="text" class="lp-dashboard-text-field form-control" value="fa-id-card" name="announcements-icon-372-0"
                                                                        id="announcements-icon-372-0" placeholder="use font awesome class e.g fa fa-bullhorn "/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-6 ">
                                                                <div class="form-group">
                                                                    <div class="margin-bottom-20">
                                                                        <label class="lp-dashboard-top-label" for="announcements-btn-text-372-0">Button Text</label>
                                                                        <input value="Announcement" name="announcements-btn-text-372-0" id="announcements-btn-text-372-0" type="text" class="lp-dashboard-text-field form-control" placeholder="Announcement">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="">
                                                                        <label  class="lp-dashboard-top-label" for="announcements-btn-link-372-0">Button Link</label>
                                                                        <input value="" type="url" class="lp-dashboard-text-field form-control" name="announcements-btn-link-372-0" id="announcements-btn-link-372-0" placeholder="e.g https://">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 margin-top-20">
                                                                <label class="lp-dashboard-top-label" for="announcements-message-372-0">Description</label>
                                                                <textarea class="lp-dashboard-des-field form-control" name="announcements-message-372-0" id="announcements-message-372-0" rows="10">We are proud to announce launch of new branch</textarea>
                                                            </div>
                                                            <div class="form-group col-sm-12 margin-top-20 margin-bottom-10">
                                                                <button class="lp-coupns-btns lp-edit-announcements" data-lid="372" data-annID="372-0" data-uid="2">Guardar</button>
                                                                <button class="lp-coupns-btns cancel-update">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: none;" id="announcements-form-toggle" class="panel with-nav-tabs panel-default lp-dashboard-tabs lp-left-panel-height  lp-container-center">
                    <div class="lp-review-sorting clearfix">
                        <a href="" class="lp-view-all-btn all-with-refresh"><i class="fa fa-angle-left" aria-hidden="true"></i> All Announcements</a>
                        <h5 class="margin-top-0 clearfix">Add Announcements                <a href="#" data-imgsrc="http://localhost/wp-content/themes/listingpro/assets/images/examples/example-announcement.jpg" data-expandimage="bird" id="pop" class="lp-view-larg-btn"><i class="fa fa-eye" aria-hidden="true"></i> Full View Example</a>
                        </h5>
                    </div>
                    <div class="lp-coupns-form-outer">
                        <div class="lp-coupons-form-inner">
                            <form class="lp-add-announcement-form">
                                <div class="lp-coupon-box-row">
                                    <div class="form-group">
                                        <label class="lp-dashboard-top-label">Live Preview</label>
                                        <div class="ann-preivew-wrap">
                                            <div class="active-preview">
                                                <div class="lp-listing-announcement">
                                                    <div class="announcement-wrap">
                                                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                                        <img src="" height="40" width="40" style="display: none;">
                                                        <p>
                                                            <strong>e.g. 46% Off - Two Vouchers Each Valid for One Large Specialty Pizza</strong>
                                                            <span>We are proud to announce launch of new branch</span>
                                                        </p>
                                                        <a target="_blank" href="#"
                                                        class="announcement-btn">Announcement</a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lp-coupon-box-row">
                                    <div class="form-group select2-dash">
                                        <div class="lp-pp-noa-tip">
                                            <i class="fa fa-exclamation" aria-hidden="true"></i> Announcements not allowed with this listing. Please upgrade your plan.
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label  class="lp-dashboard-left-label" for="announcements-listing">choose a Listing<span class="lp-requires-filed">*</span></label>
                                            </div>
                                            <div class="col-md-6">                                    
                                                <select id="announcements-listing" name="announcements-listing" class="form-control " data-metakey="announcment" data-planmetakey="">
                                                    <option value="0">Select Listing</option> 
                                                    <option value="372" data-disable="no">Mia Scarlett</option>
                                                    <option value="363" data-disable="no">Milf Elizabeth</option>
                                                    <option value="345" data-disable="no">Sasha Milf</option>
                                                    <option value="315" data-disable="no">Motel Marbella</option>
                                                    <option value="300" data-disable="no">Hotel Washington Mty</option>
                                                    <option value="286" data-disable="no">Kyoto Suites</option>
                                                    <option value="264" data-disable="no">Hotel Hacienda Monterrey</option>
                                                    <option value="253" data-disable="no">Motel Casa Blanca</option>
                                                    <option value="211" data-disable="no">Masajes Geisha</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lp-coupon-box-row">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="lp-dashboard-left-label" >Choose call to action type<span class="lp-requires-filed">*</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control lp-dashboard-select-box" name="ann-style" id="ann-style">
                                                    <option data-icon="fa fa-bullhorn"
                                                            data-title="Announcement Title"
                                                            data-st="announcement"
                                                            data-des="We are proud to announce launch of new branch">Announcement</option>
                                                    <option data-icon="fa fa-adjust" data-title="Save 20% on 3 nights stay"
                                                            data-st="book-now">Book Now</option>
                                                    <option data-icon="fa fa-cart-plus"
                                                            data-title="Save 20% on 3 nights stay"
                                                            data-st="buy-tickets"
                                                            data-des="">Buy Tickets</option>
                                                    <option data-icon="fa fa-id-card"
                                                            data-title="Contact Us Title"
                                                            data-st="contact-us"
                                                            data-des="Mention Listingpro! save 5% on services">Contact Us</option>
                                                    <option data-icon="fa fa-envelope-open"
                                                            data-title="Free appetizer with purchase of two entrees"
                                                            data-st="get-offer"
                                                            data-des="">Get Offer</option>
                                                    <option data-icon="fa fa-bullhorn"
                                                            data-title="Get a quote today and save up-to 40%"
                                                            data-st="get-quote"
                                                            data-des="">Get Quote</option>
                                                    <option data-icon="fa fa-adjust"
                                                            data-title="Join Now Title"
                                                            data-st="join-now"
                                                            data-des="3 Free classes + 50% off from first purchase">Join Now</option>
                                                    <option data-icon="fa fa-cart-plus"
                                                            data-title="Learn More Title"
                                                            data-st="learn-more"
                                                            data-des="Checkout our new happy hour specialist">Learn More</option>
                                                    <option data-icon="fa fa-id-card"
                                                            data-title="Coupon Title"
                                                            data-st="print-coupon"
                                                            data-des="Free appetizer with purchase of two entrees">Print Coupon</option>
                                                    <option data-icon="fa fa-cart-plus"
                                                            data-title="Title here10"
                                                            data-st="reserve-now"
                                                            data-des="50% off your two purchase &amp; first two Move-in-Trucks">Reserve Now</option>
                                                    <option data-icon="fa fa-envelope-open"
                                                            data-title="Same day appointment available"
                                                            data-st="schedule-appointment"
                                                            data-des="">Schedule Appointment</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lp-coupon-box-row">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label  class="lp-dashboard-left-label" for="announcements-icon">choose an Icon (<a target="_blank" href="https://fontawesome.com/v4.7.0/icons/" style="font-size: 12px; font-weight: 400;">Font Awesome</a>)</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="lp-dashboard-text-field" type="text" class="form-control" value="" name="announcements-icon"
                                                    id="announcements-icon" placeholder="use font awesome class e.g fa fa-bullhorn "/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lp-coupon-box-row">
                                    <div class="form-group">
                                        <label  class="lp-dashboard-top-label" for="announcements-btn-text">Call to action title<span class="lp-requires-filed">*</span></label>
                                        <input type="text" class="form-control lp-dashboard-text-field"
                                            value="e.g. 46% Off - Two Vouchers Each Valid for One Large Specialty Pizza"
                                            name="announcements-title" id="announcements-title"
                                            placeholder="Call to action title"/>
                                    </div>
                                </div>
                                <div class="lp-coupon-box-row">
                                    <div class="form-group">
                                        <label class="lp-dashboard-top-label" for="announcements-message">Description<span class="lp-requires-filed">*</span></label>
                                        <textarea class="form-control lp-dashboard-des-field" name="announcements-message"
                                                id="announcements-message" rows="3"
                                                placeholder="Your Message">We are proud to announce launch of new branch</textarea>
                                    </div>
                                </div>
                                <div class="lp-coupon-box-row">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="lp-dashboard-top-label" for="announcements-btn-text">Button Text</label>
                                                <input type="text" class="form-control lp-dashboard-text-field"
                                                    value="Announcement"
                                                    name="announcements-btn-text" id="announcements-btn-text"
                                                    placeholder="Button Text"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="lp-dashboard-top-label" for="announcements-btn-link">Button Link</label>
                                                <input type="url" class="form-control lp-dashboard-text-field" name="announcements-btn-link"
                                                    id="announcements-btn-link"
                                                    placeholder="https://"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lp-coupon-box-row lp-save-btn-container">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="form-group col-sm-12 clearfix">
                                                <a href="" class="lp-unsaved-btn">Unsaved Event</a>
                                                <button id="ad-announcement-btn" data-uid="2" class="lp-coupns-btns pull-right ">guardar</button>
                                                <button data-cancel="announcements" id="cancelLpAnnouncment" class="lp-coupns-btns cancel-ad-new-btn pull-right lp-margin-right-10 ">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>														
        </div>						
    </div>
</div>
@endsection