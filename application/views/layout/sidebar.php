<aside class="sidebar">
<div class="scrollbar-inner">
    <div class="user">
        <div class="user__info" data-toggle="dropdown">
            <img class="user__img" src=<?=base_url("assets/img/avatar/avatar.png")?> alt="">
            <div>
                <?php $t = explode(' ',$this->session->nomcomplet); $t_size = count($t);?>
                <div class="user__name"><?=$t[$t_size-1].' '.$t[0]?></div>
                <div class="user__email"><?=explode(' ',strtolower($this->session->nomcomplet))[0]?>@gmail.com</div>
            </div>
        </div>       
    </div>

    <ul class="navigation">
        <?php 
            if(trim($this->session->type) == trim('admin')){                
        ?>        
                <li class="navigation__sub">
                    <a href="#"><i class="zmdi zmdi-account"></i> Utilisateurs</a>
                    <ul>
                        <li><a href="profile-about.html"><i class="zmdi zmdi-collection-item"></i>&nbsp;Liste d'utilisateurs</a></li>
                        <li><a href="messages.html"><i class="zmdi zmdi-plus"></i> Nouvel utilisateur</a></li>                
                    </ul>
                </li>
                <li class="navigation__sub">
                    <a href="#"><i class="zmdi zmdi-assignment zmdi-hc-fw"></i>Exercices</a>
                    <ul>
                        <li><a href="profile-about.html">Liste d'exercices</a></li>
                        <li><a href=<?=site_url("exercice/add")?>>Nouvel exercice</a></li>                
                    </ul>
                </li>
        <?php
            }else{
        ?>
              <li class="navigation__sub navigation__active">
                    <a href="#"><i class="zmdi zmdi-collection-account"></i>Passer exercice</a>                   
                </li>
                <li class="navigation__sub">
                    <a href="#"><i class="zmdi zmdi-collection-book"></i>Resultats</a>                   
                </li>
        <?php
            }
        ?>
    </ul>
</div>
</aside>