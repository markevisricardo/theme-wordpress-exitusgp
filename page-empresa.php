<?php get_header(); ?>
	<section data-stellar-background-ratio="0.5">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
				<?php endwhile; ?>
				<?php else : get_404_template();  endif; ?>
			<?php the_post_thumbnail('post-thumbnail', array('class' => ' container-fluid img-fluid rounded px-0', 'data-stellar-background-ratio'=>'0.5')); ?>
			<div class="overlay">
			</div>

	</section>
    <section class="ftco-section-parallax">
			<div class="parallax-img d-flex align-items-center">
				<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
					<?php the_content(); ?>					
					</div>
				</div>
				</div>
			</div>
    </section>

<section class="ftco-section bg-light mt-1">
    <div class="container">
        <div class="row justify-content-center pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-1"><span>Quem está a  frente da</span> Exitus</h2>
                <p> Conheça Leandro Vignochi – Diretor da Exitus Gestão de Projetos e Processos</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 mx-5">
            	<img src="http://exitusgp.com.br/wp-content/uploads/2019/12/Leandro-Vignochi.jpeg" class="rounded px-0" width="300">            
            </div>
            <div class="col-md-7">
				<p class="pt-2 text-left">
				Leandro Vignochi  é graduado em Administração de Empresas 
				</br>com Habilitação em Análise de Sistemas. </br>
				MBA em Gestão Estratégica de
				Projetos ,MBA em Gestão Integrada da Comunicação Corporativa e Pessoal , Certificação PMP (Project Management
				Professional) pelo Project Management Institut–USA, Certificação PRINCE2 (Project In Controled Enviroment) United
				Kingdon, Vice presidente de Expansão e Branches do PMI-RS de 2010 a 2016,capacitação no Programa Lean
				Manufacturing (Produção Enxuta ) na escola Biticino- México. </br>
				Professor das disciplinas de Comunicação, Riscos, Integração, Escopo, Recursos Cronograma, Aquisições e Preparação
				para certificação PMP nas Pós Graduações das seguintes instituições de ensino: IPOG, SENAC, FISUL, Unisinos, UCS, PUC,
				Unilassale.</br></br>
				Escritor autor dos seguintes livros: Lições Aprendidas em Projetos e Gerente de Projetos Inteligente, escritor participante
				do livro Modelagem de Projetos para Arquitetura e Engenharia.</br>
				Mais de 15 anos de atuação em gerenciamento de projetos atuando principalmente em ambientes de múltiplos projetos
				nas organizações com o gerenciamento de projetos de melhoria de produção, lançamento de produtos, máquinas e
				equipamentos especiais, layout industrial, processos de estruturação fabril, layout estratégico, estruturação comercial,
				estruturação financeira e programas de redução de desperdícios.</br></br>
				Atualmente sócio diretor da Exitus Gestão de Projetos
				e Processos.
				</p>
            </div>
    <hr>
    </div>
</section>
    <section class="ftco-section bg-light pt-0">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-1"><span>Nossos</span> Valores</h2>
            <p>Entenda a Exitus conhecendo sua forma de pensar e seu posicionamento perante o mercado e seus clientes.</p>     
          </div>
        </div>
        <div class="row col-md-12">
	        <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
                    <span class="price"><span class="number"><img src="<?php bloginfo('template_url'); ?>/images/target.png" alt="" srcset=""style="width: 70px;"  ></span></span>	            
                    <h3 class="heading-2 my-4">Missão</h3>	       
                    <ul class="pricing-text mb-5">
                        <li>
                            <p>
                                Aplicar conhecimento nas áreas de gerenciamento de projetos
                                e processos, 
                                com a finalidade de proporcionar maior lucratividade 
                                e um diferencial competitivo.
                            </p>
                        </li>	             
                    </ul>
	            </div>
	          </div>
            </div>
            <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
                    <span class="price"><span class="number"><img src="<?php bloginfo('template_url'); ?>/images/suitcase.png" alt="" srcset=""style="width: 70px;"></span></span>	            
                    <h3 class="heading-2 my-4">Negócio</h3>	            
                    <ul class="pricing-text mb-5">
                        <li>
                            <p>
                            Gerenciar Projetos e Processos com assertividade em todos os segmentos organizacionais, incluindo produtos que auxiliem este gerenciamento.
                            </p>
                        </li>	             
                    </ul>
	            </div>
	          </div>
            </div>
            <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
                    <span class="price"><span class="number"><img src="<?php bloginfo('template_url'); ?>/images/eye.png" alt="" srcset=""style="width: 70px;"></span></span>	            
                    <h3 class="heading-2 my-4">Visão</h3>	            
                    <ul class="pricing-text mb-5">
                        <li>
                            <p>
                            Ser referência nos seus segmentos de atuação, sendo reconhecida pela excelência na Gestão de projetos e processos através de resultados alcançados.
                            </p>
                        </li>	             
                    </ul>
	            </div>
	          </div>
            </div>
            <div class="row col-md-12 mx-0 px-0">
            <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
                    <span class="price"><span class="number"><img src="<?php bloginfo('template_url'); ?>/images/education.png" alt="" srcset=""style="width: 70px;"  ></span></span>	            
                    <h3 class="heading-2 my-4">CREDIBILIDADE</h3>	            
                    
	            </div>
	          </div>
            </div>
     
            <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
                    <span class="price"><span class="number"><img src="<?php bloginfo('template_url'); ?>/images/transparency.png" alt="" srcset=""style="width: 70px;"  ></span></span>	            
                    <h3 class="heading-2 my-4">TRANSPARÊNCIA</h3>	            
                    
	            </div>
	          </div>
            </div>
        
            <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
                    <span class="price"><span class="number"><img src="<?php bloginfo('template_url'); ?>/images//social-care.png" alt="" srcset=""style="width: 70px;"  ></span></span>	            
                    <h3 class="heading-2 my-4">RESPONSABILIDADE</h3>	            
                    
	            </div>
	          </div>
            </div>
			</div>	
       <div class="row col-md-12 mx-0 px-0">
            <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
                    <span class="price"><span class="number"><img src="<?php bloginfo('template_url'); ?>/images/team.png" alt="" srcset=""style="width: 70px;"  ></span></span>	            
                    <h3 class="heading-2 my-4">COMPROMISSO</h3>	            
                    
	            </div>
	          </div>
            </div>
     
            <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
                    <span class="price"><span class="number"><img src="<?php bloginfo('template_url'); ?>/images/support.png" alt="" srcset=""style="width: 70px;"  ></span></span>	            
                    <h3 class="heading-2 my-4">COMPROMETIMENTO</h3>	            
                    
	            </div>
	          </div>
            </div>

            <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
                    <span class="price"><span class="number"><img src="<?php bloginfo('template_url'); ?>/images/respect.png" alt="" srcset=""style="width: 70px;"  ></span></span>	            
                    <h3 class="heading-2 my-4">RESPEITO</h3>	            
                    
	            </div>
	          </div>
            </div>
         </div>   	        
        </div>	        
	    </div>
    </section>

  
    
    
    <section class="ftco-section-parallax">
			<div class="parallax-img d-flex align-items-center">
				<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-8 text-center heading-section heading-section-white ftco-animate">
					<h2>Mais de 10 Anos de Experiência em Gestão de Projetos e Processos</h2>
          <p>Gostaria de saber mais sobre a empresa, realizar uma assessoria aplicada ou capacitação?</p>
          <a href="www.exitusgp.com.br/contato" class="btn btn-outline-light">Ir para Contato</a>
					<div class="row d-flex justify-content-center mt-4">
						
					</div>
					</div>
				</div>
				</div>
			</div>
    </section>
<?php get_footer(); ?>