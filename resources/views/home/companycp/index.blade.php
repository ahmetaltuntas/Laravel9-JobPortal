@extends('layouts.companybase')

@section('title', $settings->title)
@section('description', $settings->description)
@section('keywords', $settings->keywords)



@section('content')
    <div class="pxp-dashboard-content-details">
        <h1>Dashboard</h1>
        <p class="pxp-text-light">Welcome to Jobster!</p>

        <div class="row mt-4 mt-lg-5 align-items-center">
            <div class="col-sm-6 col-xxl-3">
                <div class="pxp-dashboard-stats-card bg-primary bg-opacity-10 mb-3 mb-xxl-0">
                    <div class="pxp-dashboard-stats-card-icon text-primary">
                        <span class="fa fa-file-text-o"></span>
                    </div>
                    <div class="pxp-dashboard-stats-card-info">
                        <div class="pxp-dashboard-stats-card-info-number">13</div>
                        <div class="pxp-dashboard-stats-card-info-text pxp-text-light">Jobs posted</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="pxp-dashboard-stats-card bg-primary bg-opacity-10 mb-3 mb-xxl-0">
                    <div class="pxp-dashboard-stats-card-icon text-success">
                        <span class="fa fa-user-circle-o"></span>
                    </div>
                    <div class="pxp-dashboard-stats-card-info">
                        <div class="pxp-dashboard-stats-card-info-number">312</div>
                        <div class="pxp-dashboard-stats-card-info-text pxp-text-light">Applications</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="pxp-dashboard-stats-card bg-primary bg-opacity-10 mb-3 mb-xxl-0">
                    <div class="pxp-dashboard-stats-card-icon text-warning">
                        <span class="fa fa-envelope-o"></span>
                    </div>
                    <div class="pxp-dashboard-stats-card-info">
                        <div class="pxp-dashboard-stats-card-info-number">14</div>
                        <div class="pxp-dashboard-stats-card-info-text pxp-text-light">Unread messages</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="pxp-dashboard-stats-card bg-primary bg-opacity-10 mb-3 mb-xxl-0">
                    <div class="pxp-dashboard-stats-card-icon text-danger">
                        <span class="fa fa-bell-o"></span>
                    </div>
                    <div class="pxp-dashboard-stats-card-info">
                        <div class="pxp-dashboard-stats-card-info-number">5</div>
                        <div class="pxp-dashboard-stats-card-info-text pxp-text-light">Notifications</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4 mt-lg-5">
            <div class="col-xl-6">
                <h2>Company Profile Visits</h2>
                <div class="mt-3 mt-lg-4 pxp-dashboard-chart-container">
                    <div class="row justify-content-between align-content-center mb-4">
                        <div class="col-auto">
                            <span class="pxp-dashboard-chart-value">154</span><span class="pxp-dashboard-chart-percent text-success"><span class="fa fa-long-arrow-up"></span> 34%</span><span class="pxp-dashboard-chart-vs">vs last 7 days</span>
                        </div>
                        <div class="col-auto">
                            <select class="form-select">
                                <option value="-7 days">Last 7 days</option>
                                <option value="-30 days">Last 30 days</option>
                                <option value="-60 days">Last 60 days</option>
                                <option value="-90 days">Last 90 days</option>
                                <option value="-12 months">Last 12 months</option>
                            </select>
                        </div>
                    </div>
                    <canvas id="pxp-company-dashboard-visits-chart"></canvas>
                </div>
            </div>
            <div class="col-xl-6">
                <h2 class="mt-4 mt-lg-5 mt-xl-0">Applications</h2>
                <div class="mt-3 mt-lg-4 pxp-dashboard-chart-container">
                    <div class="row justify-content-between align-content-center mb-4">
                        <div class="col-auto">
                            <span class="pxp-dashboard-chart-value">280</span><span class="pxp-dashboard-chart-percent text-success"><span class="fa fa-long-arrow-up"></span> 56%</span><span class="pxp-dashboard-chart-vs">vs last 7 days</span>
                        </div>
                        <div class="col-auto">
                            <select class="form-select">
                                <option value="-7 days">Last 7 days</option>
                                <option value="-30 days">Last 30 days</option>
                                <option value="-60 days">Last 60 days</option>
                                <option value="-90 days">Last 90 days</option>
                                <option value="-12 months">Last 12 months</option>
                            </select>
                        </div>
                    </div>
                    <canvas id="pxp-company-dashboard-app-chart"></canvas>
                </div>
            </div>
        </div>

        <div class="row mt-4 mt-lg-5">
            <div class="col-xxl-6">
                <h2>Recent Notifications</h2>
                <div class="pxp-dashboard-notifications">
                    <div class="pxp-dashboard-notifications-item mb-3">
                        <div class="pxp-dashboard-notifications-item-left">
                            <div class="pxp-dashboard-notifications-item-type"><span class="fa fa-briefcase"></span></div>
                            <div class="pxp-dashboard-notifications-item-message">
                                <a href="single-candidate-1.html">Scott Goodwin</a> applied for <a href="single-job-1.html">Software Engineer</a>.
                            </div>
                        </div>
                        <div class="pxp-dashboard-notifications-item-right">20m ago</div>
                    </div>
                    <div class="pxp-dashboard-notifications-item mb-3">
                        <div class="pxp-dashboard-notifications-item-left">
                            <div class="pxp-dashboard-notifications-item-type"><span class="fa fa-envelope-o"></span></div>
                            <div class="pxp-dashboard-notifications-item-message">
                                <a href="single-candidate-1.html">Kenneth Spiers</a> sent you a message.
                            </div>
                        </div>
                        <div class="pxp-dashboard-notifications-item-right">1h ago</div>
                    </div>
                    <div class="pxp-dashboard-notifications-item mb-3">
                        <div class="pxp-dashboard-notifications-item-left">
                            <div class="pxp-dashboard-notifications-item-type"><span class="fa fa-briefcase"></span></div>
                            <div class="pxp-dashboard-notifications-item-message">
                                <a href="single-candidate-1.html">Rebecca Eason</a> applied for <a href="single-job-1.html">Team Leader</a>.
                            </div>
                        </div>
                        <div class="pxp-dashboard-notifications-item-right">3h ago</div>
                    </div>
                    <div class="pxp-dashboard-notifications-item mb-3">
                        <div class="pxp-dashboard-notifications-item-left">
                            <div class="pxp-dashboard-notifications-item-type"><span class="fa fa-briefcase"></span></div>
                            <div class="pxp-dashboard-notifications-item-message">
                                <a href="single-candidate-1.html">Scott Goodwin</a> applied for <a href="single-job-1.html">Software Engineer</a>.
                            </div>
                        </div>
                        <div class="pxp-dashboard-notifications-item-right">1d ago</div>
                    </div>
                    <div class="pxp-dashboard-notifications-item mb-3">
                        <div class="pxp-dashboard-notifications-item-left">
                            <div class="pxp-dashboard-notifications-item-type"><span class="fa fa-envelope-o"></span></div>
                            <div class="pxp-dashboard-notifications-item-message">
                                <a href="single-candidate-1.html">Scott Goodwin</a> sent you a message.
                            </div>
                        </div>
                        <div class="pxp-dashboard-notifications-item-right">2d ago</div>
                    </div>
                    <div class="pxp-dashboard-notifications-item mb-3">
                        <div class="pxp-dashboard-notifications-item-left">
                            <div class="pxp-dashboard-notifications-item-type"><span class="fa fa-briefcase"></span></div>
                            <div class="pxp-dashboard-notifications-item-message">
                                <a href="single-candidate-1.html">Kenneth Spiers</a> applied for <a href="single-job-1.html">Team Leader</a>.
                            </div>
                        </div>
                        <div class="pxp-dashboard-notifications-item-right">2d ago</div>
                    </div>
                    <div class="pxp-dashboard-notifications-item mb-3">
                        <div class="pxp-dashboard-notifications-item-left">
                            <div class="pxp-dashboard-notifications-item-type"><span class="fa fa-briefcase"></span></div>
                            <div class="pxp-dashboard-notifications-item-message">
                                <a href="single-candidate-1.html">Rebecca Eason</a> applied for <a href="single-job-1.html">Software Engineer</a>.
                            </div>
                        </div>
                        <div class="pxp-dashboard-notifications-item-right">3d ago</div>
                    </div>
                    <div class="pxp-dashboard-notifications-item mb-3">
                        <div class="pxp-dashboard-notifications-item-left">
                            <div class="pxp-dashboard-notifications-item-type"><span class="fa fa-envelope-o"></span></div>
                            <div class="pxp-dashboard-notifications-item-message">
                                <a href="single-candidate-1.html">Alayna Becker</a> sent you a message.
                            </div>
                        </div>
                        <div class="pxp-dashboard-notifications-item-right">1w ago</div>
                    </div>
                    <div class="pxp-dashboard-notifications-item mb-3">
                        <div class="pxp-dashboard-notifications-item-left">
                            <div class="pxp-dashboard-notifications-item-type"><span class="fa fa-briefcase"></span></div>
                            <div class="pxp-dashboard-notifications-item-message">
                                <a href="single-candidate-1.html">Kenneth Spiers</a> applied for <a href="single-job-1.html">Team Leader</a>.
                            </div>
                        </div>
                        <div class="pxp-dashboard-notifications-item-right">1w ago</div>
                    </div>
                    <div class="pxp-dashboard-notifications-item mb-3">
                        <div class="pxp-dashboard-notifications-item-left">
                            <div class="pxp-dashboard-notifications-item-type"><span class="fa fa-briefcase"></span></div>
                            <div class="pxp-dashboard-notifications-item-message">
                                <a href="single-candidate-1.html">Rebecca Eason</a> applied for <a href="single-job-1.html">Software Engineer</a>.
                            </div>
                        </div>
                        <div class="pxp-dashboard-notifications-item-right">1mo ago</div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <h2 class="mt-4 mt-lg-5 mt-xxl-0">Recent Messages</h2>
                <div class="pxp-company-dashboard-messages">
                    <div class="pxp-company-dashboard-messages-item mb-3">
                        <div class="pxp-company-dashboard-messages-item-avatar pxp-cover" style="background-image: url(images/avatar-1.jpg);"></div>
                        <div class="pxp-company-dashboard-messages-item-details ms-3">
                            <div class="pxp-company-dashboard-messages-item-name">Scott Goodwin</div>
                            <div class="pxp-company-dashboard-messages-item-date pxp-text-light">Oct 6, 2021 at 8:04 pm</div>
                            <p class="mt-1 mb-0">Lorem Ipsum is also known as: Greeked text, blind text, placeholder text, dummy content, filler text, lipsum, and mock-content.</p>
                        </div>
                    </div>
                    <div class="pxp-company-dashboard-messages-item mb-3">
                        <div class="pxp-company-dashboard-messages-item-avatar pxp-cover" style="background-image: url(images/avatar-2.jpg);"></div>
                        <div class="pxp-company-dashboard-messages-item-details ms-3">
                            <div class="pxp-company-dashboard-messages-item-name">Kenneth Spiers</div>
                            <div class="pxp-company-dashboard-messages-item-date pxp-text-light">Oct 6, 2021 at 8:04 pm</div>
                            <p class="mt-1 mb-0">In publishing and graphic design, lorem ipsum is a filler text or greeking commonly used to demonstrate the textual elements of a graphic document or visual presentation.</p>
                        </div>
                    </div>
                    <div class="pxp-company-dashboard-messages-item mb-3">
                        <div class="pxp-company-dashboard-messages-item-avatar pxp-cover" style="background-image: url(images/avatar-3.jpg);"></div>
                        <div class="pxp-company-dashboard-messages-item-details ms-3">
                            <div class="pxp-company-dashboard-messages-item-name">Rebecca Eason</div>
                            <div class="pxp-company-dashboard-messages-item-date pxp-text-light">Oct 6, 2021 at 8:04 pm</div>
                            <p class="mt-1 mb-0">Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself has been produced.</p>
                        </div>
                    </div>
                    <div class="pxp-company-dashboard-messages-item mb-3">
                        <div class="pxp-company-dashboard-messages-item-avatar pxp-cover" style="background-image: url(images/avatar-4.jpg);"></div>
                        <div class="pxp-company-dashboard-messages-item-details ms-3">
                            <div class="pxp-company-dashboard-messages-item-name">Susanne Weil</div>
                            <div class="pxp-company-dashboard-messages-item-date pxp-text-light">Oct 6, 2021 at 8:04 pm</div>
                            <p class="mt-1 mb-0">Lorem Ipsum is also known as: Greeked text, blind text, placeholder text, dummy content, filler text, lipsum, and mock-content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 mt-lg-5">
            <h2>Recent Candidates</h2>
            <div class="table-responsive">
                <table class="table align-middle">
                    <tr>
                        <td style="width: 3%;"><div class="pxp-company-dashboard-candidate-avatar pxp-cover" style="background-image: url(images/avatar-1.jpg);"></div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-name">Scott Goodwin</div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-title">UI Designer</div></td>
                        <td><div class="pxp-company-dashboard-candidate-location"><span class="fa fa-globe"></span>London, UK</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View profile"><span class="fa fa-eye"></span></button></li>
                                    <li><button title="Send message"><span class="fa fa-envelope-o"></span></button></li>
                                    <li><button title="Delete"><span class="fa fa-trash-o"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-company-dashboard-candidate-avatar pxp-cover" style="background-image: url(images/avatar-2.jpg);"></div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-name">Kenneth Spiers</div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-title">Software Developer</div></td>
                        <td><div class="pxp-company-dashboard-candidate-location"><span class="fa fa-globe"></span>San Francisco, CA</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View profile"><span class="fa fa-eye"></span></button></li>
                                    <li><button title="Send message"><span class="fa fa-envelope-o"></span></button></li>
                                    <li><button title="Delete"><span class="fa fa-trash-o"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-company-dashboard-candidate-avatar pxp-cover" style="background-image: url(images/avatar-3.jpg);"></div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-name">Rebecca Eason</div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-title">Marketing Expert</div></td>
                        <td><div class="pxp-company-dashboard-candidate-location"><span class="fa fa-globe"></span>Los Angeles, CA</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View profile"><span class="fa fa-eye"></span></button></li>
                                    <li><button title="Send message"><span class="fa fa-envelope-o"></span></button></li>
                                    <li><button title="Delete"><span class="fa fa-trash-o"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-company-dashboard-candidate-avatar pxp-cover" style="background-image: url(images/avatar-4.jpg);"></div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-name">Susanne Weil</div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-title">Architect</div></td>
                        <td><div class="pxp-company-dashboard-candidate-location"><span class="fa fa-globe"></span>Paris, France</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View profile"><span class="fa fa-eye"></span></button></li>
                                    <li><button title="Send message"><span class="fa fa-envelope-o"></span></button></li>
                                    <li><button title="Delete"><span class="fa fa-trash-o"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-company-dashboard-candidate-avatar pxp-cover" style="background-image: url(images/avatar-1.jpg);"></div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-name">Scott Goodwin</div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-title">UI Designer</div></td>
                        <td><div class="pxp-company-dashboard-candidate-location"><span class="fa fa-globe"></span>London, UK</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View profile"><span class="fa fa-eye"></span></button></li>
                                    <li><button title="Send message"><span class="fa fa-envelope-o"></span></button></li>
                                    <li><button title="Delete"><span class="fa fa-trash-o"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-company-dashboard-candidate-avatar pxp-cover" style="background-image: url(images/avatar-2.jpg);"></div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-name">Kenneth Spiers</div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-title">Software Developer</div></td>
                        <td><div class="pxp-company-dashboard-candidate-location"><span class="fa fa-globe"></span>San Francisco, CA</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View profile"><span class="fa fa-eye"></span></button></li>
                                    <li><button title="Send message"><span class="fa fa-envelope-o"></span></button></li>
                                    <li><button title="Delete"><span class="fa fa-trash-o"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-company-dashboard-candidate-avatar pxp-cover" style="background-image: url(images/avatar-3.jpg);"></div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-name">Rebecca Eason</div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-title">Marketing Expert</div></td>
                        <td><div class="pxp-company-dashboard-candidate-location"><span class="fa fa-globe"></span>Los Angeles, CA</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View profile"><span class="fa fa-eye"></span></button></li>
                                    <li><button title="Send message"><span class="fa fa-envelope-o"></span></button></li>
                                    <li><button title="Delete"><span class="fa fa-trash-o"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-company-dashboard-candidate-avatar pxp-cover" style="background-image: url(images/avatar-4.jpg);"></div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-name">Susanne Weil</div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-title">Architect</div></td>
                        <td><div class="pxp-company-dashboard-candidate-location"><span class="fa fa-globe"></span>Paris, France</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View profile"><span class="fa fa-eye"></span></button></li>
                                    <li><button title="Send message"><span class="fa fa-envelope-o"></span></button></li>
                                    <li><button title="Delete"><span class="fa fa-trash-o"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-company-dashboard-candidate-avatar pxp-cover" style="background-image: url(images/avatar-1.jpg);"></div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-name">Scott Goodwin</div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-title">UI Designer</div></td>
                        <td><div class="pxp-company-dashboard-candidate-location"><span class="fa fa-globe"></span>London, UK</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View profile"><span class="fa fa-eye"></span></button></li>
                                    <li><button title="Send message"><span class="fa fa-envelope-o"></span></button></li>
                                    <li><button title="Delete"><span class="fa fa-trash-o"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-company-dashboard-candidate-avatar pxp-cover" style="background-image: url(images/avatar-2.jpg);"></div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-name">Kenneth Spiers</div></td>
                        <td style="width: 25%;"><div class="pxp-company-dashboard-candidate-title">Software Developer</div></td>
                        <td><div class="pxp-company-dashboard-candidate-location"><span class="fa fa-globe"></span>San Francisco, CA</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View profile"><span class="fa fa-eye"></span></button></li>
                                    <li><button title="Send message"><span class="fa fa-envelope-o"></span></button></li>
                                    <li><button title="Delete"><span class="fa fa-trash-o"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
