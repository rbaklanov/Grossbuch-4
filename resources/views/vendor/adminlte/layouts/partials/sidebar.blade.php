<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            {{--<li class="header">{{ trans('adminlte_lang::message.header') }}</li>--}}
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="#"><i class='fa fa-book'></i> <span>Отчеты</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class='fa fa-calendar'></i><span>Ежедневные</span></a></li>
                    <li class="treeview">
                        <a href="#"><i class='fa fa-folder'></i> <span>Сводные</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#">Распределение затрат <br> рабочего времени</a></li>
                            <li><a href="#">Эффективность <br> временных затрат</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class='fa fa-address-book-o'></i> <span>Клиентские</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#">О проделанной <br> работе</a></li>
                            <li><a href="#">Протоколы сдачи <br> отчетности</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class='fa fa-user-secret'></i> <span>Управленческие</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#">О прибылях и убытках</a></li>
                            <li><a href="#">Журнал учета <br> доходов-расходов</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-envelope'></i> <span>Почта</span></a></li>
            <li><a href="#"><i class='fa fa-tasks'></i> <span>Задачи</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-ruble'></i> <span>Финансы</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Оплата</a></li>
                    <li><a href="#">Доходы/расходы</a></li>
                </ul>
            </li>
            <li><a href="#"><i class='fa fa-calendar-check-o'></i> <span>Календарь отчетности</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-gears'></i> <span>Настройки</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href={{ url('/users') }}>Пользователи</a></li>
                    <li><a href="#">Клиенты</a></li>
                    <li><a href="#">Роли</a></li>
                    <li><a href={{ url('/routines') }}>Типовые операции</a></li>
                    <li><a href={{ url('/departments') }}>Отделы</a></li>
                    <li><a href={{ url('/positions') }}>Должности</a></li>
                    <li><a href="#">Личный кабинет</a></li>
                    <li><a href="#">О компании</a></li>
                </ul>
            </li>
            <li><a href="/logout"><i class='fa fa-sign-out'></i> <span>Выход</span></a></li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
