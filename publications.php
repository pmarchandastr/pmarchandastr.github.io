<!DOCTYPE html>


<html>

  <head>
  <?php include('entete.php');?>

<!-- Script affichage abstract -->
<script>
  function visibilite(thingId)
  {
    var targetElement;
    targetElement = document.getElementById(thingId);
    if(targetElement.style.display == "none")
    {
      targetElement.style.display = "";
    }
    else {
      targetElement.style.display = "none";
    }
  }
</script>
<!-- Fin script -->

  </head>
  


  
  <body>
  
    <?php include('menu.php');?>






 <div class="row">

       <h1>Publications</h1>



       <h2>List of publications</h2>

       <ul>

              <li>
                <!-- About the article -->
                <a href="https://ui.adsabs.harvard.edu/abs/2020arXiv200704048G/abstract">Dust coagulation feedback on magnetohydrodynamic resistivities in protostellar collapse</a> </br>
                <span class="names"> Guillet V., Hennebelle P., Pineau des Forêts G., Marcowith A., Commerçon, B., <b>Marchand P.</b> </span>,
                <span class="annee">2020</span>,
                <span class="journal">A&A (in press)</span> </br>

                <!-- The abstract thing -->
                <a href="" class="abstract_button" onclick="javascript:visibilite('d7'); javascript:visibilite('h7'); javascript:visibilite('s7'); return false;">
                <span id= 'h7' style="display:none;">
                Hide
                </span>
                <span id= 's7'>
                Show
                </span>
                abstract
                </a> </br>

                <span class="description" id='d7' style="display:none;">
                Through the magnetic braking and the launching of protostellar outflows, magnetic fields play a major role in the regulation of angular momentum in star formation, which directly impacts the formation and evolution of protoplanetary disks and binary systems. The aim of this paper is to quantify those phenomena in the presence of non-ideal magnetohydrodynamics effects, namely the Ohmic and ambipola r diffusion. We perform three-dimensional simulations of protostellar collapses varying the mass of the prestellar dense core, the thermal support (the  α  ratio) and the dust grain size-distribu tion. The mass mostly influences the magnetic braking in the pseudo-disk, while the thermal support impacts the accretion rate and hence the properties of the disk. Removing the grains smaller than 0. 1  μ m in the Mathis, Rumpl, Nordsieck (MRN) distribution enhances the ambipolar diffusion coefficient. Similarly to previous studies, we find that this change in the distribution reduces the magnet ic braking with an impact on the disk. The outflow is also significantly weakened. In either case, the magnetic braking largely dominates the outflow as a process to remove the angular momentum from t he disk. Finally, we report a large ionic precursor to the outflow with velocities of several km s −1 , which may be observable.
                </span> 

              </li>

</br>

              <li>
                <!-- About the article -->
                <a href="https://ui.adsabs.harvard.edu/abs/2020arXiv200901268M/abstract">Protostellar collapse: regulation of the angular momentum and onset of an ionic precursor</a> </br>
                <span class="names"> <b>Marchand P.</b>, Tomida K., Tanaka K.E.I., Commerçon B., Chabrier G. </span>,
                <span class="annee">2020</span>,
                <span class="journal">ApJ (in press)</span> </br>

                <!-- The abstract thing -->
                <a href="" class="abstract_button" onclick="javascript:visibilite('d6'); javascript:visibilite('h6'); javascript:visibilite('s6'); return false;">
                <span id= 'h6' style="display:none;">
                Hide
                </span>
                <span id= 's6'>
                Show
                </span>
                abstract
                </a> </br>

                <span class="description" id='d6' style="display:none;">
                Through the magnetic braking and the launching of protostellar outflows, magnetic fields play a major role in the regulation of angular momentum in star formation, which directly impacts the formation and evolution of protoplanetary disks and binary systems. The aim of this paper is to quantify those phenomena in the presence of non-ideal magnetohydrodynamics effects, namely the Ohmic and ambipola r diffusion. We perform three-dimensional simulations of protostellar collapses varying the mass of the prestellar dense core, the thermal support (the  α  ratio) and the dust grain size-distribu tion. The mass mostly influences the magnetic braking in the pseudo-disk, while the thermal support impacts the accretion rate and hence the properties of the disk. Removing the grains smaller than 0. 1  μ m in the Mathis, Rumpl, Nordsieck (MRN) distribution enhances the ambipolar diffusion coefficient. Similarly to previous studies, we find that this change in the distribution reduces the magnet ic braking with an impact on the disk. The outflow is also significantly weakened. In either case, the magnetic braking largely dominates the outflow as a process to remove the angular momentum from t he disk. Finally, we report a large ionic precursor to the outflow with velocities of several km s −1 , which may be observable.
                </span> 

              </li>

</br>

              <li>
                <!-- About the article -->
                <a href="https://ui.adsabs.harvard.edu/abs/2019A%26A...631A..66M/abstract">Impact of the Hall effect in star formation : improving the angular momentum conservation</a> </br>
                <span class="names"> <b>Marchand P.</b>, Tomida K., Commerçon B., Chabrier G. </span>,
                <span class="annee">2019</span>,
                <span class="journal">A&A 631</span> </br>

                <!-- The abstract thing -->
                <a href="" class="abstract_button" onclick="javascript:visibilite('d5'); javascript:visibilite('h5'); javascript:visibilite('s5'); return false;">
                <span id= 'h5' style="display:none;">
                Hide
                </span>
                <span id= 's5'>
                Show
                </span>
                abstract
                </a> </br>

                <span class="description" id='d5' style="display:none;">
We present here a minor modification of our numerical implementation of the Hall effect for the 2D Riemann solver used in Constrained Transport schemes, as described in Marchand et al. (2018). In the previous work, the tests showed that the angular momentum was not conserved during protostellar collapse simulations, with significant impact. By removing the whistler waves speed from the characteristic speeds of non-magnetic variables in the 1D Riemann solver, we are able to improve the angular momentum conservation in our test-case by one order of magnitude, while keeping the second-order numerical convergence of the scheme. We also reproduce the simulations of Tsukamoto et al. (2015) with consistent resistivities, the three non-ideal MHD effects and initial rotation, and agree with their results. In this case, the violation of angular momentum conservation is negligible in regard to the total angular momentum and the angular momentum of the disk.
                </span> 

              </li>

</br>

              <li>
                <!-- About the article -->
                <a href="https://ui.adsabs.harvard.edu/abs/2018A%26A...619A..37M/abstract">Impact of the Hall effect in star formation and the issue of angular momentum conservation</a> </br>
                <span class="names"> <b>Marchand P.</b>, Commerçon B., Chabrier G. </span>,
                <span class="annee">2018</span>,
                <span class="journal">A&A 619</span> </br>

                <!-- The abstract thing -->
                <a href="" class="abstract_button" onclick="javascript:visibilite('d4'); javascript:visibilite('h4'); javascript:visibilite('s4'); return false;">
                <span id= 'h4' style="display:none;">
                Hide
                </span>
                <span id= 's4'>
                Show
                </span>
                abstract
                </a> </br>

                <span class="description" id='d4' style="display:none;">
We present an implementation of the Hall term in the non-ideal magnetohydrodynamics equations into the adaptive-mesh-refinement code RAMSES to study its impact on star formation. Recent works show that the Hall effect heavily influences the regulation of the angular momentum in collapsing dense cores, strengthening or weakening the magnetic braking. Our method consists of a modification of the two-dimensional constrained transport scheme. Our scheme shows convergence of second-order in space and the frequency of the propagation of whistler waves is accurate. We confirm previous results, namely that during the collapse, the Hall effect generates a rotation of the fluid with a direction in the mid-plane that depends on the sign of the Hall resistivity, while counter-rotating envelopes develop on each side of the mid-plane. However, we find that the predictability of our numerical results is severely limited. The angular momentum is not conserved in any of our dense core-collapse simulations with the Hall effect: a large amount of angular momentum is generated within the first Larson core, a few hundred years after its formation, without compensation by the surrounding gas. This issue is not mentioned in previous studies and may be correlated to the formation of the accretion shock on the Larson core. We expect that this numerical effect could be a serious issue in star formation simulations.
                </span> 

              </li>

</br>

              <li>
                <!-- About the article -->
                <a href="http://adsabs.harvard.edu/abs/2016ApJ...830L...8H">Magnetically Self-regulated Formation of Early Protoplanetary Disks</a> </br>
                <span class="names"> Hennebelle P., Commerçon B., Chabrier G., <b>Marchand P.</b> </span>,
                <span class="annee">2016</span>,
                <span class="journal">ApJL 830</span> </br>

                <!-- The abstract thing -->
                <a href="" class="abstract_button" onclick="javascript:visibilite('d3'); javascript:visibilite('h3'); javascript:visibilite('s3'); return false;">
                <span id= 'h3' style="display:none;">
                Hide
                </span>
                <span id= 's3'>
                Show
                </span>
                abstract
                </a> </br>

                <span class="description" id='d3' style="display:none;">
                  The formation of protoplanetary disks during the collapse of molecular dense cores is significantly influenced by angular momentum transport, notably by the magnetic torque. In turn, the evolution of the magnetic field is determined by dynamical processes and non-ideal MHD effects such as ambipolar diffusion. Considering simple relations between various timescales characteristic of the magnetized collapse, we derive an expression for the early disk radius, r? 18 {au} {({? }{AD}/0.1{{s}})}2/9{({B}z/0.1{{G}})}-4/9{(M/0.1{M}? )}1/3, where M is the total disk plus protostar mass, {? }{AD} is the ambipolar diffusion coefficient, and B z is the magnetic field in the inner part of the core. This is significantly smaller than the disks that would form if angular momentum was conserved. The analytical predictions are confronted against a large sample of 3D, non-ideal MHD collapse calculations covering variations of a factor 100 in core mass, a factor 10 in the level of turbulence, a factor 5 in rotation, and magnetic mass-to-flux over critical mass-to-flux ratios 2 and 5. The disk radius estimates are found to agree with the numerical simulations within less than a factor 2. A striking prediction of our analysis is the weak dependence of circumstellar disk radii upon the various relevant quantities, suggesting weak variations among class-0 disk sizes. In some cases, we note the onset of large spiral arms beyond this radius.
                </span> 

              </li>

</br>

              <li>
                <!-- About the article -->
                <a href="http://adsabs.harvard.edu/abs/2016A%26A...592A..18M"> A chemical solver to compute molecule and grain abundances and non-ideal MHD resistivities in prestellar core collapse calculations </a></br>
                <span class="names"><b>Marchand P.</b>, Masson J., Hennebelle P., Chabrier G., Commerçon B., Vaytet N.</span>,
                <span class="annee">2016</span>,
                <span class="journal">A&A 592</span> </br>

                <!-- The abstract thing -->
                <a href="" class="abstract_button" onclick="javascript:visibilite('d2'); javascript:visibilite('h2'); javascript:visibilite('s2'); return false;">
                <span id= 'h2' style="display:none;">
                Hide
                </span>
                <span id= 's2'>
                Show
                </span>
                abstract
                </a> </br>

                <span class="description" id='d2' style="display:none;">
                  We develop a detailed chemical network relevant to the conditions characteristic of prestellar core collapse. We solve the system of time-dependent differential equations to calculate the equilibrium abundances of molecules and dust grains, with a size distribution given by size-bins for these latter. These abundances are used to compute the different non-ideal magneto-hydrodynamics resistivities (ambipolar, Ohmic and Hall), needed to carry out simulations of protostellar collapse. For the first time in this context, we take into account the evaporation of the grains, the thermal ionisation of Potassium, Sodium and Hydrogen at high temperature, and the thermionic emission of grains in the chemical network, and we explore the impact of various cosmic ray ionisation rates. All these processes significantly affect the non-ideal magneto-hydrodynamics resistivities, which will modify the dynamics of the collapse. Ambipolar diffusion and Hall effect dominate at low densities, up to n_H = 10^12 cm^-3, after which Ohmic diffusion takes over. We find that the time-scale needed to reach chemical equilibrium is always shorter than the typical dynamical (free fall) one. This allows us to build a large, multi-dimensional multi-species equilibrium abundance table over a large temperature, density and ionisation rate ranges. This table, which we make accessible to the community, is used during first and second prestellar core collapse calculations to compute the non-ideal magneto-hydrodynamics resistivities, yielding a consistent dynamical-chemical description of this process.
                </span> 

              </li>

</br>

              <li>
                <!-- About the article -->
                <a href="https://tel.archives-ouvertes.fr/tel-01677949">PhD Thesis (in English) : Study of the physical processes involved in star formation by turbulent gravitational collapse</a> </br>
                <span class="annee">2017</span>,
                <span class="journal">Supervisors : Chabrier G. and Commerçon B.</span> </br>
                To access the file, click on "TH2017MARCHANDPIERRE.pdf" on the top right </br>

                <!--The abstract thing -->
                <a href="" class="abstract_button" onclick="javascript:visibilite('d1'); javascript:visibilite('h1'); javascript:visibilite('s1'); return false;">
                <span id= 'h1' style="display:none;">
                Hide
                </span>
                <span id= 's1'>
                Show
                </span>
                abstract
                </a> </br>

                <span class="description" id='d1' style="display:none;">

                     The regulation of angular momentum is widely studied in star formation: how to characterize the gas rotation during the gravitational collapse that forms the star ? This question is related to several phenomena, such as planet formation or the creation of a binary system. From the pre-stellar cloud to the final star, the system loses most of its angular momentum, and several mechanisms have been proposed to explain this phenomena. We focus on non-ideal magnetohydrodynamics (MHD), which describes the behaviour of a magnetised fluid. Several studies suggest that including it into the theoretical and numerical models leads to results coherent with observations, which are, with the numerical simulations, the only ways to test the theoretical models in astrophysics.
                     
                     First, we develop a code computing the chemical equilibrium of elements composing the gas of the future star. This way, we retrieve the values of the resistivities determining the strength of several MHD processes. We also study the influence of several parameters on these values, the grain population or the cosmic-rays ionisation rate for instance. 
                     
                     We then focus on the Hall effect, one of the three processes of non-ideal MHD and still scarcely studied in this context. We implement it into the eulerian code {\ttfamily RAMSES}, and perform numerical simulations to quantify its impact on a gravitational collapse. As predicted by theory, the Hall effect has a great influence on the size of the protoplanetary disk, in which planets form, and creates envelopes of gas rotating in the opposite direction from the rest of the system.


                </span> 

              </li>




       </ul>



     </div> <!-- corpse -->

  </body>
   

</html>




       </ul>



     </div> <!-- corpse -->

  </body>
   

</html>
