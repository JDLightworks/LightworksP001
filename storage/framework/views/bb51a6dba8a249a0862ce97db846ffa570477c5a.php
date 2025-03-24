<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu"><?php echo e(__('Dashboard')); ?></li>
                <li>
                    <a href="<?php echo e(url('/dashboard')); ?>" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span><?php echo e(__('translation.dashboards')); ?></span>
                    </a>
                </li>

                <li class="menu-title" key="t-menu"><?php echo e(__('Hospital')); ?></li>
                <?php if($role == 'admin'): ?>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class='bx bx-plus-medical'></i>
                            <span><?php echo e(__('translation.doctors')); ?></span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="<?php echo e(url('doctor')); ?>"><?php echo e(__('translation.list-of-doctors')); ?></a></li>
                            <li><a href="<?php echo e(route('doctor.create')); ?>"><?php echo e(__('translation.add-new-doctor')); ?></a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class='bx bxs-user-detail'></i>
                            <span><?php echo e(__('translation.patients')); ?></span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="<?php echo e(url('patient')); ?>"><?php echo e(__('translation.list-of-patients')); ?></a></li>
                            <li><a href="<?php echo e(route('patient.create')); ?>"><?php echo e(__('translation.add-new-patient')); ?></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class='bx bx-user-voice'></i>
                            <span><?php echo e(__('translation.receptionist')); ?></span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="<?php echo e(url('receptionist')); ?>"><?php echo e(__('translation.list-of-receptionist')); ?></a>
                            </li>
                            <li><a
                                    href="<?php echo e(route('receptionist.create')); ?>"><?php echo e(__('translation.add-new-receptionist')); ?></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-user-circle"></i>
                            <span><?php echo e(__('translation.accountant')); ?></span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="<?php echo e(url('accountant')); ?>"><?php echo e(__('translation.list-of-accountant')); ?></a></li>
                            <li><a
                                    href="<?php echo e(route('accountant.create')); ?>"><?php echo e(__('translation.add-new-accountant')); ?></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-list-plus"></i>
                            <span><?php echo e(__('translation.department')); ?></span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="<?php echo e(url('department')); ?>"><?php echo e(__('translation.list-of-department')); ?></a></li>
                            <li><a
                                    href="<?php echo e(route('department.create')); ?>"><?php echo e(__('translation.add-new-department')); ?></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo e(url('pending-appointment')); ?>" class="waves-effect">
                            <i class="bx bx-list-ul"></i>
                            <span><?php echo e(__('translation.appointment-list')); ?></span>
                        </a>
                    </li>
                    <li class="menu-title" key="t-menu"><?php echo e(__('Transactions')); ?></li>
                    <li>
                        <a href="<?php echo e(url('transaction')); ?>" class="waves-effect">
                            <i class='bx bx-bookmark-minus'></i>
                            <span><?php echo e(__('translation.transaction')); ?></span>
                        </a>
                    </li>

                    <li class="menu-title" key="t-menu"><?php echo e(__('Setting')); ?></li>
                    <li>
                        <a href="<?php echo e(url('app-setting')); ?>" class="waves-effect">
                            <i class='bx bx-cog'></i>
                            <span><?php echo e(__('translation.app-setting')); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('front-setting')); ?>" class="waves-effect">
                            <i class='bx bx-book-content' ></i>
                            <span><?php echo e(__('translation.front-side')); ?></span>
                        </a>
                    </li>
                <?php elseif($role == 'doctor'): ?>
                    <li>
                        <a href="<?php echo e(route('appointment.create')); ?>" class="waves-effect">
                            <i class="bx bx-calendar-plus"></i>
                            <span><?php echo e(__('translation.appointments')); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo e(url('pending-appointment')); ?>" class="waves-effect">
                            <i class="bx bx-list-ul"></i>
                            <span><?php echo e(__('translation.appointment-list')); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class='bx bxs-user-detail'></i>
                            <span><?php echo e(__('translation.patients')); ?></span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="<?php echo e(url('patient')); ?>"><?php echo e(__('translation.list-of-patients')); ?></a></li>
                            <li><a href="<?php echo e(route('patient.create')); ?>"><?php echo e(__('translation.add-new-patient')); ?></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo e(url('receptionist')); ?>" class="waves-effect">
                            <i class='bx bx-user-voice'></i>
                            <span><?php echo e(__('translation.receptionist')); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo e(url('accountant')); ?>" class="waves-effect">
                            <i class="bx bx-user-circle"></i>
                            <span><?php echo e(__('translation.accountant')); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-notepad"></i>
                            <span><?php echo e(__('translation.prescription')); ?></span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="<?php echo e(url('prescription')); ?>"><?php echo e(__('translation.list-of-prescription')); ?></a>
                            </li>
                            <li><a
                                    href="<?php echo e(route('prescription.create')); ?>"><?php echo e(__('translation.create-prescription')); ?></a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-title" key="t-menu"><?php echo e(__('Billing')); ?></li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-receipt"></i>
                            <span><?php echo e(__('translation.invoice')); ?></span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="<?php echo e(url('invoice')); ?>"><?php echo e(__('translation.list-of-invoice')); ?></a></li>
                            <li><a href="<?php echo e(route('invoice.create')); ?>"><?php echo e(__('translation.create-invoice')); ?></a>
                            </li>
                        </ul>
                    </li>
                <?php elseif($role == 'receptionist'): ?>
                    <li>
                        <a href="<?php echo e(route('appointment.create')); ?>" class="waves-effect">
                            <i class="bx bx-calendar-plus"></i>
                            <span><?php echo e(__('translation.appointments')); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('pending-appointment')); ?>" class="waves-effect">
                            <i class="bx bx-list-ul"></i>
                            <span><?php echo e(__('translation.appointment-list')); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('doctor')); ?>" class="waves-effect">
                            <i class='bx bx-plus-medical'></i>
                            <span><?php echo e(__('translation.doctors')); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class='bx bxs-user-detail'></i>
                            <span><?php echo e(__('translation.patients')); ?></span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="<?php echo e(url('patient')); ?>"><?php echo e(__('translation.list-of-patients')); ?></a></li>
                            <li><a href="<?php echo e(route('patient.create')); ?>"><?php echo e(__('translation.add-new-patient')); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo e(url('prescription')); ?>" class="waves-effect">
                            <i class="bx bx-notepad"></i>
                            <span><?php echo e(__('translation.prescription')); ?></span>
                        </a>
                    </li>
                    <li class="menu-title" key="t-menu"><?php echo e(__('Billing')); ?></li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-receipt"></i>
                            <span><?php echo e(__('translation.invoice')); ?></span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="<?php echo e(url('invoice')); ?>"><?php echo e(__('translation.list-of-invoice')); ?></a></li>
                            <li><a href="<?php echo e(route('invoice.create')); ?>"><?php echo e(__('translation.create-invoice')); ?></a>
                            </li>
                        </ul>
                    </li>
                    
                <?php elseif($role == 'patient'): ?>
                    <li>
                        <a href="<?php echo e(route('appointment.create')); ?>" class="waves-effect">
                            <i class="bx bx-calendar-plus"></i>
                            <span><?php echo e(__('translation.appointments')); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('patient-appointment')); ?>" class="waves-effect">
                            <i class="bx bx-list-ul"></i>
                            <span><?php echo e(__('translation.appointment-list')); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('doctor')); ?>" class="waves-effect">
                            <i class='bx bx-plus-medical'></i>
                            <span><?php echo e(__('translation.doctors')); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('prescription-list')); ?>" class="waves-effect">
                            <i class="bx bx-notepad"></i>
                            <span><?php echo e(__('translation.prescription')); ?></span>
                        </a>
                    </li>
                    <li class="menu-title" key="t-menu"><?php echo e(__('Billing')); ?></li>
                    <li>
                        <a href="<?php echo e(url('invoice-list')); ?>" class="waves-effect">
                            <i class="bx bx-receipt"></i>
                            <span><?php echo e(__('translation.invoice')); ?></span>
                        </a>
                    </li>
                <?php elseif($role == 'accountant'): ?>
                    <li>
                        <a href="<?php echo e(url('doctor')); ?>" class="waves-effect">
                            <i class='bx bx-plus-medical'></i>
                            <span><?php echo e(__('translation.doctors')); ?></span>
                        </a>
                    </li>
                    <li class="menu-title" key="t-menu"><?php echo e(__('Billing')); ?></li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-receipt"></i>
                            <span><?php echo e(__('translation.invoice')); ?></span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="<?php echo e(url('invoice')); ?>"><?php echo e(__('translation.list-of-invoice')); ?></a></li>
                            <li><a href="<?php echo e(route('invoice.create')); ?>"><?php echo e(__('translation.create-invoice')); ?></a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH /Users/user/Downloads/Doctorly_Laravel_v3.1.0/Admin/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>