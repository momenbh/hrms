<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span></span>

                </li>
                @if(auth()->user()->role=='admin')
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class=""></span></a>
                    <ul style="display: none;">
                        {{-- <li><a class="active" href="{{route('dashboard')}}">Admin Dashboard</a></li> --}}
                        {{-- <li><a href="{{route('employee.dashboard')}}">Employee Dashboard</a></li> --}}
                    </ul>
                </li>

                        <li><a href="{{route('view.department')}}">Departments</a></li>
                        <li><a href="{{route('view.admin')}}">Admins</a></li>
                        <li><a href="{{route('view.designation')}}">Designations</a></li>
                         <li><a href="{{route('view.employee')}}">Employees</a></li>
                         <li><a href="{{route('view.notice')}}">Notice</a></li>
                        <li><a href="{{route('view.holiday')}}">Holidays</a></li>
                        <li class="submenu">
                            <a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a  href="{{route('view.payroll')}}"> Employee Salary </a></li>
                            </ul>
                        {{-- <li><a href="{{route('view.payroll')}}">payroll</a></li> --}}
                        <li><a href="{{route('checkin.attendance')}}">AttendanceList</a></li>
                        <li><a href="{{route('view.leavetype')}}">Leave Type</a></li>
                        <li><a href="{{route('view.leavelist')}}">LeaveList</a></li>
                        <li class="submenu">
                            <a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{route('report.payroll')}}"> Payments Report </a></li>
                                <li><a href="{{route('report.employee')}}"> Employee Report </a></li>
                                <li><a href="{{route('report.attendance')}}"> Attendance Report </a></li>
                                <li><a href="{{route('leave.report')}}"> Leave Report </a></li>
                                
                            </ul>
                        @endif


                        @if(auth()->user()->role=='employee')
                        <li><a href="{{route('employee.dashboard')}}">Employee Dashboard</a></li>
                         <li><a href="{{route('view.attendance')}}">Attendance </a></li>
                        <li><a href="{{route('view.leave')}}"> Apply Leave</a></li>
                        <li><a href="{{route('view.noticelist')}}">View Notice </a></li>
                        <li><a href="{{route('status.payroll')}}">Payroll Status</a></li>

                        <li><a class="dropdown-item" href="{{route('do.logout')}}">Logout</a></li>

                          @endif
            </ul>
        </div>
    </div>
</div>
