<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css"> 
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <title>Article Page</title>
</head>
<body>
<?php include 'navbar.php'; ?>

  <div class="container mt-5">
  <h1 class="text-center my-4">Articles</h1>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="articleimages/redlight.jpg" class="card-img-top" alt="Image 1">
          <div class="card-body">
            <h5 class="card-title">लाल ट्रैफिक लाइट के बारे में रोचल तथ्य:</h5>
            <p class="card-text">लाल ट्रैफ़िक लाइट पर इंतजार करते-करते जीवन के 6 महीने गुजर जाते हैं . जब हम सड़कों..</p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal1">और पढ़ें</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="articleimages/new-york.jpg" class="card-img-top" alt="Image 2">
          <div class="card-body">
            <h5 class="card-title">अमेरिका के बारे में कुछ रोचल तथ्य:</h5>
            <p class="card-text"> अमेरिका में 10 करोड़ से अधिक कुत्ते हैं। यह दुनिया के किसी भी देश से ज्यादा है..</p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal2">और पढ़ें</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="articleimages/kangaroo.jpg" class="card-img-top" alt="Image 3">
          <div class="card-body">
            <h5 class="card-title">कंगारुओं के बारे में कुछ रोचल तथ्य:</h5>
            <p class="card-text">कंगारू उल्टा नहीं चल सकता। वे केवल आगे कूद सकते हैं..</p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal3">और पढ़ें</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 1 -->
  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal1Label">लाल ट्रैफ़िक लाइट पर इंतजार करते-करते जीवन के 6 महीने गुजर जाते हैं!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p> 
          लाल ट्रैफ़िक लाइट पर इंतजार करते-करते जीवन के 6 महीने गुजर जाते हैं!
          
          जब हम सड़कों पर चलते हैं, तो रास्ते में हमेशा लाल ट्रैफ़िक लाइट पर रुकना पड़ता है - यह ट्रैफ़िक नियम हमारी सुरक्षा और यातायात को सुविधाजनक बनाने का कार्य करता है, लेकिन क्या आपने कभी सोचा है कि इस लाल ट्रैफ़िक लाइट के इंतजार में हमारा कितना समय निकल जाता है?
          
          एक रिसर्च के अनुसार, औसतन एक व्यक्ति जीवन के दौरान लाल ट्रैफ़िक लाइट के सामने इंतजार करते हुए लगभग 6 महीने बिता देता है! हाँ, आपने सही सुना। यह आंकड़ा काफी चौंका देने वाला है, और यह दिखाता है कि हमारे जीवन का कितना बड़ा हिस्सा हम यातायात नियमों की पालना करते हुए इंतजार में बिता देते हैं।   
         </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal2Label">अमेरिका के बारे में कुछ रोचल तथ्य:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>संयुक्त राज्य अमेरिका में सबसे लंबी जगह का नाम "झील चारगोगागोगमानचाउगागोगचौबुनागुनगामाग" है। यह मैसाचुसेट्स की एक झील है जो 46 अक्षर लंबी है।</p>
            <p>संयुक्त राज्य अमेरिका में 50 से अधिक आधिकारिक राज्य खाद्य पदार्थ हैं।</p>
            <p>नेब्रास्का राज्य दुनिया की सबसे बड़ी पेंट बॉल का घर है। यह पेंट की 12 फुट लंबी गेंद है जिसका वजन 9,000 पाउंड से अधिक है।</p>
            <p>संयुक्त राज्य अमेरिका में 17 मिलियन मील से अधिक सड़कें हैं। यह पृथ्वी की चार बार परिक्रमा करने के लिए पर्याप्त है।</p>
            <p>संयुक्त राज्य अमेरिका में 100,000 से अधिक गोल्फ कोर्स हैं। यह दुनिया के किसी भी अन्य देश से अधिक है।</p>
            <p>संयुक्त राज्य अमेरिका में 300 मिलियन से अधिक कारें हैं। यह दुनिया के किसी भी अन्य देश से अधिक है।</p>
            <p>संयुक्त राज्य अमेरिका में 200 मिलियन से अधिक टेलीविजन हैं। यह दुनिया के किसी भी अन्य देश से अधिक है।</p>
            <p>संयुक्त राज्य अमेरिका में 10 करोड़ से अधिक कुत्ते हैं। यह दुनिया के किसी भी अन्य देश से अधिक है।</p>
            <p>संयुक्त राज्य अमेरिका में 75 मिलियन से अधिक बिल्लियाँ हैं। यह दुनिया के किसी भी अन्य देश से अधिक है।</p>
            <p>संयुक्त राज्य अमेरिका में 300 मिलियन से अधिक लोग हैं। यह अमेरिका में किसी भी अन्य देश से अधिक है।</p>
            
    

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal3Label">कंगारुओं के बारे में कुछ रोचल तथ्य:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>कंगारू उल्टा नहीं चल सकता। वे केवल आगे कूद सकते हैं।</p>
            <p>कंगारू एकमात्र ऐसे मार्सुपियल्स हैं जो तैर सकते हैं।</p>
            <p>कंगारुओं के पेट पर पाउच होते हैं जहां वे अपने बच्चों को ले जाते हैं।</p>
            <p>कंगारू शाकाहारी होते हैं। वे घास, पत्ते और फल खाते हैं।</p>
            <p>कंगारू बहुत ताकतवर होते हैं। वे अपने शक्तिशाली हिंद पैरों से मुक्का मार सकते हैं और अपनी शक्तिशाली पूंछ से लात मार सकते हैं।</p>
            <p>कंगारू बहुत तेज होते हैं। ये 25 मील प्रति घंटे की रफ्तार से छलांग लगा सकते हैं।</p>
            <p>कंगारू बहुत ही सामाजिक प्राणी हैं। वे भीड़ नामक समूह में रहते हैं।</p>
            <p>सबसे बड़ा कंगारू लाल कंगारू होता है। यह 7 फीट लंबा और 200 पाउंड तक वजन बढ़ा सकता है।</p>
            <p>सबसे छोटा कंगारू कस्तूरी चूहा-कंगारू है। यह केवल 10 इंच लंबा है और इसका वजन लगभग 2 पाउंड है।</p>
            <p>कंगारू ऑस्ट्रेलिया में पाए जाते हैं। ये ऑस्ट्रेलिया के राष्ट्रीय पशु हैं।</p>
            <p>कंगारू ऑस्ट्रेलियाई पारिस्थितिकी तंत्र का एक महत्वपूर्ण हिस्सा हैं। वे पौधों और जानवरों की आबादी को नियंत्रित करने में मदद करते हैं।</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5">
  <!-- <h1 class="text-center my-4">Articles</h1> -->
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="articleimages/world.jpg" class="card-img-top" alt="Image 1">
          <div class="card-body">
            <h5 class="card-title">दुनिया के बारे में कुछ रोचक तथ्य:</h5>
            <p class="card-text">दुनिया का सबसे पुराना ज्ञात जमीनी जानवर जोनाथन नाम का एक कछुआ है, जिसकी उम्र ..</p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal4">और पढ़ें</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="articleimages/student.jpg" class="card-img-top" alt="Image 2">
          <div class="card-body">
            <h5 class="card-title">पाद के बारे में कुछ रोचक तथ्य:</h5>
            <p class="card-text"> एक औसत व्यक्ति दिन में लगभग 14 बार पाद मारता है..</p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal5">और पढ़ें</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="articleimages/girl.jpg" class="card-img-top" alt="Image 3">
          <div class="card-body">
            <h5 class="card-title">लड़कियों के बारे में कुछ मजेदार तथ्य:</h5>
            <p class="card-text">एक औसत लड़की अपने जीवन के लगभग 17 साल खरीदारी में..</p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal6">और पढ़ें</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal4Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal4Label">दुनिया के बारे में कुछ रोचक तथ्य:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <p>दुनिया का सबसे पुराना ज्ञात जमीनी जानवर जोनाथन नाम का एक कछुआ है, जिसकी उम्र 190 साल आंकी गई है।</p>
        <p>दुनिया की सबसे गहरी झील रूस के साइबेरिया में बैकाल झील है। यह इतना गहरा है कि इसमें दुनिया का 20% ताजा पानी है।</p>
        <p>विश्व का सबसे बड़ा मरुस्थल सहारा मरुस्थल अफ्रीका में है। यह इतना बड़ा है कि यह सभी 48 सन्निहित संयुक्त राज्य अमेरिका में फिट हो सकता है।</p>
        <p>दुनिया का सबसे ऊंचा पर्वत हिमालय में माउंट एवरेस्ट है। यह इतना ऊँचा है कि इसकी अपनी जलवायु प्रणाली है।</p>
        <p>दुनिया का सबसे तेज़ जानवर पेरेग्रीन बाज़ है। यह 200 मील प्रति घंटे तक की गति तक पहुंच सकता है।</p>
        <p>दुनिया का सबसे बड़ा जीवित जीव ओरेगॉन में एक कवक है जो 2,000 वर्ष से अधिक पुराना है।</p>
        <p>दुनिया का सबसे छोटा देश वेटिकन सिटी है। यह इतना छोटा है कि न्यूयॉर्क शहर के सेंट्रल पार्क में समा सकता है।</p>
        <p>विश्व का सबसे बड़ा महासागर प्रशांत महासागर है। यह पृथ्वी की सतह के एक तिहाई से अधिक को कवर करता है।</p>
        <p>विश्व का सबसे अधिक जनसंख्या वाला देश चीन है। इसमें 1.4 बिलियन से अधिक लोग हैं।</p>
        <p>विश्व का सबसे छोटा महाद्वीप ऑस्ट्रेलिया है। यह सबसे शुष्क महाद्वीप भी है।</p>
        <p>दुनिया का सबसे बड़ा द्वीप ग्रीनलैंड है। यह दुनिया का सबसे बड़ा निर्जन द्वीप भी है।</p>
        <p>विश्व की सबसे अधिक बोली जाने वाली भाषा मंदारिन चीनी है। यह 1.1 बिलियन से अधिक लोगों द्वारा बोली जाती है।</p>
        <p>दुनिया की सबसे वैल्युएबल कंपनी Apple है। इसका बाजार पूंजीकरण $ 2 ट्रिलियन से अधिक है।</p>
        <p>दुनिया के सबसे अमीर व्यक्ति एलोन मस्क हैं। उनकी कुल संपत्ति 200 अरब डॉलर से अधिक है।</p>
                             
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modal5Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal5Label">पाद के बारे में कुछ रोचक तथ्य:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <p>एक औसत व्यक्ति दिन में लगभग 14 बार पाद मारता है।</p>
          <p>पाद ज्यादातर कार्बन डाइऑक्साइड, मीथेन और हाइड्रोजन से बने होते हैं।</p>
          <p>पाद हवा में 15 फीट तक जा सकता है।</p>
          <p>सबसे ज्यादा बदबूदार पाद सल्फर युक्त यौगिकों के कारण होता है।</p>
          <p>कार को पावर देने के लिए पाद का इस्तेमाल किया जा सकता है। 2010 में, कोलोराडो बोल्डर विश्वविद्यालय के इंजीनियरों की एक टीम ने एक ऐसी कार बनाई जो मानव पाद द्वारा उत्पादित मीथेन गैस पर चल सकती थी।</p>
           <p>सबसे लंबा रिकॉर्ड किया गया पाद 2 मिनट 52 सेकंड लंबा था। यह पॉल कर्सी नाम के एक व्यक्ति द्वारा आयोजित किया गया था, जो ब्रिटिश टेलीविजन शो "वर्ल्ड्स स्ट्रॉन्गेस्ट फार्टर" का एक प्रतियोगी था। कर्सी अतिरिक्त मिनट और 7 सेकंड के लिए अपने गोज़ को रोककर 1 मिनट और 47 सेकंड के पिछले रिकॉर्ड को तोड़ने में सफल रहे।
              कर्सी का पाद इतना लंबा था कि इसे डेसिबल में मापा जाता था, जो ध्वनि दबाव की एक इकाई है। उनका पाद 110 डेसिबल पर मापा गया था, जो कि एक जंजीर की तरह जोर से है।
              कर्सी के पाद से भी बहुत दुर्गंध आ रही थी। उन्होंने कहा कि इसमें सड़े हुए अंडे और गोभी के मिश्रण जैसी गंध आ रही थी।
              2 मिनट और 52 सेकंड तक पादने की कर्सी की उपलब्धि को गिनीज वर्ल्ड रिकॉर्ड्स द्वारा आधिकारिक रूप से मान्यता नहीं दी गई है। हालाँकि, यह अभी भी एक प्रभावशाली उपलब्धि है, और इतिहास में अब तक दर्ज किए गए सबसे लंबे फार्ट में से एक के रूप में नीचे जाना निश्चित है।</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="modal6Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal6Label">लड़कियों के बारे में कुछ मजेदार तथ्य:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <p>क्या आप जानते हैं कि एक औसत लड़की अपने जीवन के लगभग 17 साल खरीदारी में बिताती है। दुकानों में बहुत समय व्यतीत होता है!</p>
          <p>लड़कियों को मल्टीटास्किंग में भी बहुत अच्छा माना जाता है। वे अक्सर एक साथ कई काम कर सकते हैं, जैसे अपना होमवर्क करते समय फोन पर बात सकती हैं</p>
          <p>और अंत में, लड़कियों को बात करने में भी बहुत अच्छा माना जाता है। वे अक्सर किसी भी चीज और हर चीज के बारे में घंटों बात कर सकती हैं।</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>

