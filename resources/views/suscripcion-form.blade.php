 <div class="td-post-content">
            
           <div class="group">
		<h2 style="color:#000">Formulario de Suscripci&oacute;n  <!--a nuestro bolet�n de noticias--></h2>
		
		
		
		
		
		
		
		
		  <form action="suscribirme" method="POST">
		  	 @csrf
		  <input type="hidden" name="ok" value="ok">
				<label for="nombre">Nombre <span>(requerido)</span></label>
				<input type="text" name="name" class="form-input" required="">
				
				<label for="email">Email <span>(requerido)</span></label>
				<input type="email" name="email" class="form-input" required="">
				
				<label for="password">Empresa  </label>
				<input type="text" name="empresa" class="form-input" required="">
				
                <label for="nick">Cargo  </label>
				<input type="text" name="cargo" class="form-input" required="">
               <hr>
           		<input class="form-btn" name="submit" type="submit" value="Suscribirme!!">	
		  </form>
		  
		  
		  
		  
		</div> 
            
</div>
<!--
<div class="td-post-content">

        <div class="td-post-featured-image"><a href="https://i0.wp.com/www.itwarelatam.com/wp-content/uploads/2020/12/amazon-sagemaker.jpg?fit=1000%2C579&amp;ssl=1" data-caption="" class="td-modal-image"><img width="696" height="403" class="entry-thumb td-animation-stack-type0-1" src="https://i0.wp.com/www.itwarelatam.com/wp-content/uploads/2020/12/amazon-sagemaker.jpg?resize=696%2C403&amp;ssl=1" srcset="https://i0.wp.com/www.itwarelatam.com/wp-content/uploads/2020/12/amazon-sagemaker.jpg?w=1000&amp;ssl=1 1000w, https://i0.wp.com/www.itwarelatam.com/wp-content/uploads/2020/12/amazon-sagemaker.jpg?resize=300%2C174&amp;ssl=1 300w, https://i0.wp.com/www.itwarelatam.com/wp-content/uploads/2020/12/amazon-sagemaker.jpg?resize=768%2C445&amp;ssl=1 768w, https://i0.wp.com/www.itwarelatam.com/wp-content/uploads/2020/12/amazon-sagemaker.jpg?resize=696%2C403&amp;ssl=1 696w, https://i0.wp.com/www.itwarelatam.com/wp-content/uploads/2020/12/amazon-sagemaker.jpg?resize=725%2C420&amp;ssl=1 725w" sizes="(max-width: 696px) 100vw, 696px" alt="" title="amazon sagemaker"></a></div>
        <p>De esta manera, la compañía promete facilitar aún más a los desarrolladores automatizar y escalar completamente todos los pasos del flujo de trabajo de machine learning.</p>
<p>El anuncio reúnen nuevas y potentes capacidades, como una preparación de datos más rápida, un repositorio especialmente diseñado para datos preparados, automatización del flujo de trabajo, mayor transparencia en los datos de entrenamiento para mitigar el sesgo y explicar las predicciones, capacidades de entrenamiento distribuidas para entrenar modelos grandes hasta dos veces más rápido, y monitoreo de modelos en dispositivos edge.</p>
<p>Mientras Amazon SageMaker Data Wrangler proporciona “la forma más rápida y sencilla de que los desarrolladores preparen datos para machine learning”, SageMaker Feature Store ofrece un almacén de datos especialmente diseñado para almacenar, actualizar, recuperar y compartir características de machine learning</p>
<p>Por otra parte, Amazon presentó SageMaker Pipelines como el primer servicio de integración y entrega continua (CI/ CD) para desarrolladores, “fácil de usar y especialmente diseñado para machine learning”. Asimismo, SageMaker Clarify promete una mayor visibilidad de sus datos de entrenamiento para que puedan limitar el sesgo en los modelos de machine learning y explicar las predicciones.</p>
<p>También se presentó Deep Profiling de Amazon SageMaker Debugger, que monitorea el rendimiento del entrenamiento de machine learning para ayudar a los desarrolladores a que sus modelos aprendan más rápido. Asimismo, Distributed Training de SageMaker ofrece nuevas capacidades que pueden entrenar modelos grandes hasta dos veces más rápido de lo que sería posible con los procesadores de machine learning actuales. SageMaker Edge Manager ofrece monitoreo y administración de modelos de machine learning para dispositivos edge. Finalmente, anunció SageMaker JumpStart, un portal para desarrolladores con modelos pre entrenados y flujos de trabajo prediseñados.</p>
<p><strong>Amazon HealthLake&nbsp;</strong><br>
Se trata de una empresa que tendrá acceso a la Ley de Transferencia y Responsabilidad de Seguro Médico (HIPAA, por sus siglas en inglés), para las empresas en el sector de salud y biociencias.</p>
<p><img loading="lazy" class="aligncenter size-full wp-image-29951 td-animation-stack-type0-1" src="https://i1.wp.com/www.itwarelatam.com/wp-content/uploads/2020/12/Amazon-Health.jpg?resize=696%2C418&amp;ssl=1" alt="" width="696" height="418" srcset="https://i1.wp.com/www.itwarelatam.com/wp-content/uploads/2020/12/Amazon-Health.jpg?w=1000&amp;ssl=1 1000w, https://i1.wp.com/www.itwarelatam.com/wp-content/uploads/2020/12/Amazon-Health.jpg?resize=300%2C180&amp;ssl=1 300w, https://i1.wp.com/www.itwarelatam.com/wp-content/uploads/2020/12/Amazon-Health.jpg?resize=768%2C461&amp;ssl=1 768w, https://i1.wp.com/www.itwarelatam.com/wp-content/uploads/2020/12/Amazon-Health.jpg?resize=696%2C418&amp;ssl=1 696w, https://i1.wp.com/www.itwarelatam.com/wp-content/uploads/2020/12/Amazon-Health.jpg?resize=700%2C420&amp;ssl=1 700w" sizes="(max-width: 696px) 100vw, 696px"></p>
<p>Amazon HealthLake agrupa toda la información de una empresa a través de varios silos y distintos formatos en un data lake y automáticamente normaliza esta información utilizando machine learning. El servicio identifica cada parte de la información clínica, índices e indicadores de eventos en un cronograma visual con etiquetas uniformes para que se pueda buscar con facilidad, y organiza toda la información dentro del formato estándar del Fast Healthcare Interoperability Resources (FHIR) para una visión completa de la salud tanto de pacientes individuales como de poblaciones enteras. Con esto, Amazon HealthLake permite que sus consumidores consulten, realicen análisis y programen machine learning para obtener información valiosa de los nuevos datos. Empresas en el sector de salud, farmacéuticas, estudios clínicos, aseguradoras médicas, y otras pueden usar Amazon HealthLake para detectar tendencias y anomalías en información relacionada con la salud y de esta forma hacer predicciones más exactas sobre el avance de enfermedades, la eficacia de ensayos clínicos, la fiabilidad de las primas de seguro y muchas otras aplicaciones.</p>
<p>&nbsp;</p>
        </div> -->