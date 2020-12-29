// Replace #footer-info
const this_year = new Date().getFullYear(); // Get current year
const copyright_text = `Loumarc Signs. All Rights Reserved. <a href="https://www.google.com/maps?daddr=178+US-206,+Hillsborough+Township,+NJ+08844" target="_blank">178 Route 206, Suite A, Hillsborough, NJ 08844</a>. P: <strong><a href="tel:+19085754000">908-575-4000</a></strong>`;
const developed_by = `<a href="http://stallone.dev">Proud collaboration with Hoverboard Media</a>`;

// Google Tags Manager
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N5S5BSZ');
// Body script in Divi > Theme Options > Integration

jQuery(function($){
   // Replace #footer-info
   $('#footer-info').html(`© 2012 - ${this_year} ${copyright_text} <br/> <small>${developed_by}</small>` );
});

// Bing Analytics
(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"46000012"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");
