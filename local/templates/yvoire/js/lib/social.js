FacebookAPI = {
//        UserID : "1848485525268467",
//        SecretID : "d8dea2871ac07ce4a8150a6dc0d5e940",
//        ClientID : "370d3366e06d82f08adea5716a6ea849",
//        PageID : "1455670674576642",
		AppID : "2112731975414346",
		Token : "EAAeBhL7mckoBAKwSKPiULGlk85GXu3GF4CsZBArp5wzpZAh9ACJ124QZAX3uUypVs56hNEqZB70V7EZC393YuwXtmmIZBXkakiGeZBZCAG7gzqk3MAQdFBJVMRtZBOycR2bXkhD2bNWZC6IZADNbZCD41orRCrkwBcLrJ92BZARreO64ZA5ZByWf7iVZCTX8",
	Count : 20,

    Load: function(){
        window.fbAsyncInit = function() {
            FB.init({
                appId      : FacebookAPI.AppID,
                xfbml      : true,
                version    : 'v3.1'
            });
        };
        
        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/ko_KR/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        
        FacebookAPI.GetPosts();
    },
    
    GetPosts: function(){
        FB.api("me?fields=posts", 'GET', {
            access_token : FacebookAPI.Token,
            fields : "posts.limit("+FacebookAPI.Count+"){object_id,name,full_picture,picture,link,message,type,likes.summary(true),created_time}"
        }, function(response){
            var html = "";
            var dataPosts = response.posts.data;
            var dataLen = dataPosts.length;
            
            if(dataLen > 20){
            	dataLen = 20;
            }
            for(var i=0; i<dataLen; i++){
            	if(dataPosts[i].full_picture != undefined){
            		html += "<li>";
	                    html += "<a href='"+dataPosts[i].link+"' target='_blank'>";
	                        html += "<img src='"+dataPosts[i].full_picture+"' alt='FACEBOOK LIST THUMBNAIL' />";
	                        html += "<span class='detail_view'>";
	                            html += "<p class='hLike'>"+dataPosts[i].likes.summary.total_count+"</p>";
	                            if(dataPosts[i].message != undefined){
	                                html += "<p class='tit v-ellipsis'>"+dataPosts[i].message+"</p>";
	                            }
	                        html += "</span>";
	                    html += "</a>";
	                html += "</li>";
            	}
            }
            $("#facebookfeed").append(html);
            
            var listWidth = $(".listbox.facebookList ul li").width();
            $(".listbox.facebookList ul li a>img").height(listWidth);
            $(window).resize(function(){
                var listWidth = $(".listbox.facebookList ul li").width();
                $(".listbox.facebookList ul li a>img").height(listWidth);
            });

            snsLoader.listHover();
            txtOver.init();
        });
    },
    
    ImageReplace: function(picture, type, pid){
        if(picture != undefined) {
            if(type == 'photo' || type == 'video') {
                if (picture.indexOf('_s') !== -1) {
                    picture = picture.replace(/_s/, '_o');
                } else if (pid) {
                    picture = 'https://graph.facebook.com/'+ pid +'/picture?width=210&height=210';
                }
            } else if(type == 'link'){
                if (picture.indexOf('&w=130&h=130') !== -1) {
                    picture = picture.replace(/&w=130&h=130/, '&w=210&h=210');
                }
            } else {
                var qps = picture.split('&');
                for (var i = 0; i < qps.length; i++) {
                    var qp = qps[i];
                    var matches = qp.match(/(url=|src=)/gi);
                    if (matches && matches.length > 0) picture = decodeURIComponent(qp.split(matches[0])[1]);
                }
            }
            return picture;
       }
    }
}

Date.fromISO= (function(){
	var testIso = '2011-11-24T09:00:27+0200';
	// Chrome
	var diso= Date.parse(testIso);

	if(diso===1322118027000) return function(s){
		return new Date(Date.parse(s));
	}
	// JS 1.8 gecko
	var noOffset = function(s) {
            var arrday, day;

            arrday= s.slice(0,-5).split(/\D/);
            day = $.map(arrday, function(itm){
                    return parseInt(itm, 10) || 0;
            });
            day[1]-= 1;
            day= new Date(Date.UTC.apply(Date, day));  
            var offsetString = s.slice(-5)
            var offset = parseInt(offsetString,10)/100; 
            if (offsetString.slice(0,1)=="+") offset*=-1;
            day.setHours(day.getHours()+offset);

            return day.getTime();
	}

	if (noOffset(testIso)===1322118027000) {
            return noOffset;
	}  

	return function(s){ // kennebec@SO + QTax@SO
            var arrday, day, tz, 
            //        rx = /^(\d{4}\-\d\d\-\d\d([tT][\d:\.]*)?)([zZ]|([+\-])(\d{4}))?$/,
            rx = /^(\d{4}\-\d\d\-\d\d([tT][\d:\.]*)?)([zZ]|([+\-])(\d\d):?(\d\d))?$/,

            p= rx.exec(s) || [];
            if(p[1]){
                arrday= p[1].split(/\D/);
                day = $.map(arrday, function(itm){
                    return parseInt(itm, 10) || 0;
                });
                day[1]-= 1;
                day= new Date(Date.UTC.apply(Date, day));
                if(!day.getDate()) return NaN;
                if(p[5]){
                    tz= parseInt(p[5], 10)/100*60;
                    if(p[6]) tz += parseInt(p[6], 10);
                    if(p[4]== "+") tz*= -1;
                    if(tz) day.setUTCMinutes(day.getUTCMinutes()+ tz);
                }
                return day;
            }
            return NaN;
	}
 })()