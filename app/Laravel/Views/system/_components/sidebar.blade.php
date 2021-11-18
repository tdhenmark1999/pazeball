<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{route('system.dashboard.index')}}">
                        <i class="fas fa-chart-pie"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('system.transaction.index')}}">
                        <i class=" fas fa-file-contract"></i>
                        <span data-key="t-dashboard">Transaction</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                       <i class="fas fa-users"></i>
                        <span data-key="t-apps">User Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('system.user_management.pazer')}}">
                              <i class="fas fa-user"></i> Pazer
                            </a>
                        </li>
                        <li>
                            <a href="{{route('system.user_management.pazepro')}}">
                               <i class="fas fa-user-ninja"></i>Pazepro         
                                                   </a>
                        </li>
                        <li>
                            <a href="{{route('system.user_management.admin')}}">
                                 <i class="fas fa-user-cog"></i>Admin
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('system.become_pazepro.index')}}">
                        <i class=" fas fa-user-clock"></i>
                        <span data-key="t-dashboard">Becoming a Pazepro</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class=" fas fa-wallet"></i>
                        <span data-key="t-apps">Wallet Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('system.wallet_management.cash_in')}}">
                                Transaction
                            </a>
                        </li>
                        <li>
                            <a href="{{route('system.wallet_management.cash_in')}}">
                                Cash in
                            </a>
                        </li>
                        <li>
                            <a href="{{route('system.wallet_management.cash_out')}}">
                                Cash out
                            </a>
                        </li>
                        <li>
                            <a href="{{route('system.wallet_management.rewards')}}">
                                Rewards
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-users"></i>
                        <span data-key="t-apps">Rewards Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('system.rewards.index')}}">
                                List of Rewards
                            </a>
                        </li>
                        <li>
                            <a href="{{route('system.rewards.create')}}">
                                Create Reward
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class=" fas fa-archive"></i>
                        <span data-key="t-apps">Parameters</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('system.parameter.index')}}">
                                List of Parameters
                            </a>
                        </li>
                        <li>
                            <a href="{{route('system.parameter.create')}}">
                                Create Parameter
                            </a>
                        </li>
                    </ul>
                </li>
                 <li>
                    <a href="#">
                        <i class="fas fa-file-signature"></i>
                        <span data-key="t-dashboard">Activity Logs</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
