<?php
// This block MUST be at the very top of the page!
@ob_start('ob_gzhandler');
if(isset($_GET['icon']))
{
	$e=$_GET['icon'];
	$I['file']='R0lGODlhEAAPAOYAAIyMlu7u9PHx9vDw9fT0+PPz97u7vvf3+vb2+d/f4vn5+/39/vv7/Pr6+/b29+3t7pCRnI6PmZOVn5ibpZWYopqeqJ2hq6KnsaClr9fZ3ff4+t/g4qSqtKmwuqeuuM3P0vHz9tze4be6vuzv8+vu8urt8eXo7Kuzva61vquyu9/k6uXp7uTo7cvU3dHZ4dDY4Nfe5d3j6dzi6Nvh5+Po7eLn7OHm69HV2ejs8Ofr7+7x9OHk597h5PT2+PP19/Hz9evt7+Lk5t3f4fr7/Pn6+/b3+PX299Tc49rh5+ru8fDz9ff5+vb4+fP19vz9/f////7+/vv7+/Pz8+/v7+zs7Orq6ubm5uHh4d7e3sDAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAFkALAAAAAAQAA8AAAevgFmCJ4SFhDuCiYIdUI1QDQ9NKCGKgh4LjQsOG0smKRmVHAxPUAtGQktLPxxTihcKjU5FQR8iBhdXihgHC05DTEA8NwkYWIoWCENEGj1KJCsIFsaJFQRMPT5KIzk2BBXTghMFIEo6JDk1MQUT4FkUAiVJOCs2MTACFO0SAyw0NiozYLgYIKEdhAAyZiCBceRFiwAQ2kUIQLFixQjtAGjcyBFAuyhSqFgZSXJklSyBAAA7';
	$I['dir']='iVBORw0KGgoAAAANSUhEUgAAABAAAAAOCAMAAAAR8Wy4AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABL1BMVEUrp+Eqp+EqqOEpp+ElpOAqp+AWm9wUmNsWmtwYm9wZm90AAABi0fBi0vFg0PFg0fFh0fJh0PEpqOEqqOEqp+IpqOIqp+Eqp+IrpuArp+EureMwruQvruQvreQtquIpp+EsquIrqOIqqOIrqOI/tucqpuAlpOAmpeEmpeEnpeEnpeEnpeEmpeAhoN8pp+A+t+dPw+xSxu1Rxe1Rxe0/t+hk0/Nk0/Jk0/Jk0/Nk0/Nk0/Nl1PMqp+Bf0PFg0PFg0PFg0PFg0fJg0fJg0fJg0fFg0fJg0fJg0fJh0fJg0fJh0PJg0fJi0vFg0PFh0PFi0fBg0PFg0PFh0fJh0fJg0PJg0PFg0fFh0fJh0fFh0PEnpuFQxO1PxO1Nwuxk0/Jg0PFh0fJh0PJg0fJg0fH////3jKpUAAAAWnRSTlMAAAAAAAAAAAAAAAAAAAAAAAABBQUFAQEBAQICAgICAQiInIQHARnYx8nIx7QMARjx/Pv8GRfz/v388RcBF/P+F/P+9BcXFu/8+/zwARgZAQmMnJqKAQQFBQEGY/FxAAAAAWJLR0Rkwtq4CQAAAAd0SU1FB+UMERAAFdbzuvEAAACxSURBVAjXPctFEsJAFADRj8vgHtzd3QkSIFhwlwD3vwOD5S27qgF0eoPBaPoy8yxA8AWY0Gqz2x02p0sEhNvj9fr8YokUk8kDAMEjFgpHotFYJJ5IApFKZ7K50/n0dsmLABWK19K1/FYpV2t1QI3mrXX7aZIIENlmO+zXvdvDgeLC496lECj6gyE9/KBHY2oCiumTfbD/Z6YEZr5Yrn6W6/kEGJVaw9Fq8bLZ7jj7g/IFkhcxpnkPAP8AAAAldEVYdGRhdGU6Y3JlYXRlADIwMjEtMTItMTdUMTY6MDA6MDkrMDA6MDDYSnfLAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIxLTEyLTE3VDE2OjAwOjA5KzAwOjAwqRfPdwAAAABJRU5ErkJggg==';
	$I['doc']='R0lGODlhEAAQAPcAAAEyeCg+bQgviwU2ggg8iAZCmwlLsiFMmjpamDJbtipitzhhrjppuE1qp0BmtERquVVtpF11q2d+s0JuxEl0zFJ3ylV7zl99w1h+0XeKnG6Ov3KQv3KRv3aTvXqVu3uVvH6XulWAyFmBxliCxV2ExF6ExGCBzWGIw2KJw2WKwmeLwWmMwWyOwGeK1XeR1XyX2P8A/4KavIWdvoOc2oCe5oigwIuiwoyiwouk3ZGnxpesyZCu1p2xzYml6ZOr5qO20am71K260K+836q+8a/A2LPD2rfI9MnS4tbc6tLi+tTj+tbk+tfl+9zi9Nnm+9vn+9zo+97p++Dq/OHs/OPt/OXu/Obv/Ojw/erx/evy/e3z/e/0/fDy+vD2/vL3/vT4/vX5/vf6/vn7/////wCpEQAAABLs7NS5srGlQNcVPRQCgBQCQBLtDNdNrxQCgGQCeNdN4xQCgBLtFAAAAJEFyCNr8BLt4JEFURQHqJEFbRLuOAAAABLtPAAAAJEFyFiHuBLuCJEFURQHSBLtWAAAAJEFyFiHuBLuJJEFURQHSJEFbRLuaAAABAAAAOaERAAAAgAABAAAMAAAACNr+NSLsf3QAAAAMAAABBQAABLrmJD7bAAAIAAAAFiHwBLuOAAAAAAAIADwqgAAIAAAAAAAAJDnvJDVhhLuCJD7bJD7cZDVhpDnvBQAABLt5JDnyBLujJDuGJD7eAH//wAABBLtaAAAABLujJDuGJEFcP///5EFbZEJvBQAAAAAAFiHwBLuSJEJkliHwAAAABLunN3tDt3tIGKmyAABxGKm1AAAAAAAAAAAAAAAAAAAABLuaBLu7BS3YBS3YBLuoOb8I8OlLsYaoBLu2MLCzQAABMLC4xS04BS3YAAAAxSwbsXS4BSwABLu1BLupP///xLvQMNclMEgcP///8LC40SV1RS3YGMboGMboEUEtRQAABS04IoASAAAAAAAAOqG1OqG1OqG1OqG1AAC8BLvJN1sdBLvLIoASIoASObgowAACeaCsAAABCH5BAEAADAALAAAAAAQABAAAAjhAGEILALkBw8dOWzIAAFCoEMYRMSEAfPFS5ctIMY0hOHDRw8aL1pgqDBBgZaMGjmOWclypYEsKDX2GDLDBBITTSDgMICFoU8aTWZcaPKgSYMMBq5YqUJlCggXY1w8EHIAB4IjBZY2lQKixRgJDyIMSBBgTIEqO3ZIieLBwhgICIwMGBBkDIGtUaB0oDBGwAIuAxysHDAlLZQnGxi0bAlg7WEnLBQYmFygMoEBAKKkdcJEhcMbWqc4fsJ5CQqHNZimXZ12iZISDmXgfczEdRIRDmN8+NCBg4YVKU6QGBEiREAAADs=';
	$I['xls']='R0lGODlhEAAQAPcAADVJGjRNGTVNGDRSFzRTFzRYFTReEzReFDVeGjNpDzNtDjRtDjRjETRkEjZjGztoHjpvHjNwDTlwHjp3GTx3Hz57HjJoKDtxIjp9Jz99IWB+XEKAJUaELEeFLUKJNUeIO02MNk+OOUiSP1OTQFKXSFiYR1qaSVieUl6YVV+hU1uiWHCbbWGiVGGgWGWnW2eqX2SoYGmtYmqsZW2wZ3SlcG6Ov3KQv3KRv3aTvXqVu3uVvH6XulWAyFmBxliCxV2ExF6ExGGIw2KJw2WKwmeLwWmMwWyOwP8A/4KavIWdvoephZC9i5ywm6Gzn4igwIuiwoyiwpGnxpesyZCu1p2xzaO20am71JPCjpPEjZbEkZrGlq/A2LPD2sDRwMzay8/dz9bi1t/p39Li+tTj+tbk+tfl+9nm+9vn+9zo+97p++Xs5eDq/OHs/OPt/OXu/Obv/Ojw/erx/evy/e3z/e/0/fD2/vL3/vT4/vX5/vf6/vn7/////xLtPAAAAJEFyCLVGBLuCJEFURQHSBLtWAAAAJEFyCLVGBLuJJEFURQHSJEFbRLuaAAABAAAAOaERAAAAgAABAAAMAAAAFeQiNSLsf3QAAAAMAAABBQAABLrmJD7bAAAIAAAACLVIBLuOAAAAAAAIADwqgAAIAAAAAAAAJDnvJDVhhLuCJD7bJD7cZDVhpDnvBQAABLt5JDnyBLujJDuGJD7eAH//wAABBLtaAAAABLujJDuGJEFcP///5EFbZEJvBQAAAAAACLVIBLuSJEJkiLVIAAAABLunN3tDt3tIGKmyAABwGKm1AAAAAAAAAAAAAAAAAAAABLuaBLu7BSuABSuABLuoOb8I8OlLsYaoBLu2MLCzQAABMLC4xSsQBSuAAAAAxSg2MXS4BSgABLu1BLupP///xLvQMNclMEgcP///8LC40SV1RSuAGMboGMboEUEtRQAABSsQKR+UAAAAAAAAOqG1OqG1OqG1OqG1AACBBLvJN1sdBLvLKR+UKR+UObgowAACeaCsAAABCH5BAEAAEcALAAAAAAQABAAAAjhAI8I5GKlChUpUZ4k2bFDoMMjW/TkwXPHTh06O/Y0PDIjhosUJkaA6LChwpyMGjnuWclyZQQ5KDXOuAKDxB4vKFAwURCHoc8XarDI8ECjxQcwCeC8cdOGzQ4We75oUYHBQpc9DJY2XbOjxJ4lJ7KouLAizAE3U6asSZMjxBIKEBwsEfGgSYGtadDg4NBSiQQEGgawSYvmjI0MLVsKWFvYjJEJERYkaGCgAIEAANKkNVOGiEMoWtkwPsOZjBCHTpimXZ2WzBggDpPgbVzGtZgeDpHo0IHjRo0iQ4L88MGDR0AAADs=';
	$I['jpg']=$I['gif']=$I['png']='iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABaFBMVEUAjv8A//9Osv8bmv8AkP9Ps/8Aj/9Ksf8Gk/8Akf8AjP8Awf8Akf8Akf8Aj/9Msf9Drf8upP8Aj/8AkP8Akf9IsP9Lsv9Fr/8AkP8AkP9Nsv9Qs/9Ksf8Pl/8Umf8Fk/8Aj/8Akf8Ckv8Ah/8Ajv8Ckv9Psf85qP8Ai//H5/8Bkv8AkP8UmP8Ajv8cmf8Ajv8Klf8Akf8Bj/8AjP8Mlv8AkP8Bkf8AkP8Akf8AkP8Akf8Akf8Akf8Pl/8Aj/8Ol/9Msv8Llf9Ps/8AkP8Dkv8Wmv8Aif8Ajv8Ckv8Ckf9/x/9xwf8Bkf8Ejv8AgP9guf+f1v+p2v9IsP8Aiv8Ek/9Cq/+Z0/8rof+v3P8Ym/8Ah/+94/+Mzf+s2/8Klf8YnP8Lkf8Ajf9cuP8bmf8Agf9vwP+84f++4/8Tlf8Ai/9fuv8AjP/X7f8+q/9LsP/M6f8hn/8Bkv8Nl/8enP9Psf+Nzv8Bj//////c5BDBAAAAPHRSTlMAAAAAAAAAAAAAAADM/f5pBQEK5v5gAwHl/v5iA/73Hfwk/v4K5v4K5v7+JArm/v4k5v7+JAr+/SPM6BT+sIfUAAAAAWJLR0R3RmT51wAAAAd0SU1FB+UMERAEE1v82sAAAADnSURBVBjTY2Bg5LHhtQECPlt+JgFBZgYWIWEbEZCAnb2DKKuYOAObkISNJFjAUcpJml0GKCAMFHC2cXFxlnWVk+eACDjbOLu5Odu5KyiyQAQ8PDy9vO18fHgVOUECzkq+fv4BgUHBHiIQgRDl0LDwiMBIOxuQAIuKapRadExsXHxCoockUIBBXSNJMzklNTYtPSNTS5uTgUtHN0sv2yYhJzcvv0DfAKTFMNio0K6oODOqpNTYhI2BzVTYw8zZxs690CO7TESbE+p0ZxsfZ2dPG3MLTqjTQcDZBmwtA7clxPtArrOVNScAa4MzfZSh7VQAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjEtMTItMTdUMTY6MDQ6MDQrMDA6MDCwdrZxAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIxLTEyLTE3VDE2OjA0OjA0KzAwOjAwwSsOzQAAAABJRU5ErkJggg==';
	$I['txt']='R0lGODlhEAAQAPcAAB6Kcm6Ov3KQv3KRv3aTvXqVu3uVvH6XulWAyFmBxliCxV2ExF6ExGGIw2KJw2WKwmeLwWmMwWyOwP8A/4KavIWdvoigwIuiwoyiwo+lxJGnxpKoxpWryJesyZmtypCu1p2xzaO20am71K/A2LPD2tLi+tTj+tbk+tfl+9nm+9vn+9zo+97p++Dq/OHs/OPt/OXu/Obv/Ojw/erx/evy/e3z/e/0/fD2/vL3/vT4/vX5/vf6/vn7/////xLuYAAAQAAAAAAAABLuqBLuaAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQBLurJDuGAAAAAAAAgAAAQACEBLuYAACEJEZcAa6SAa6KAAAAAAAAAHskAABHhLsBJDuGBLswNS5TACpEQCpERLs1NS47q0nqACpEQAAABLs7NS5sq0nqNcVPRQCgBQCQBLtDNdNrxQCgCoFBtdN4xQCgBLtFAAAAJEFyCLqgBLt4JEFURQHqJEFbRLuOAAAABLtPAAAAJEFyAcKIBLuCJEFURQHSBLtWAAAAJEFyAcKIBLuJJEFURQHSJEFbRLuaAAABAAAAOaERAAAAgAABAAAMAAAACLqiNSLsf3wAAAAMAAABBQAABLrmJD7bAAAIAAAAAcKKBLuOAAAAAAAIADwqgAAIAAAAAAAAJDnvJDVhhLuCJD7bJD7cZDVhpDnvBQAABLt5JDnyBLujJDuGJD7eAH//wAABBLtaAAAABLujJDuGJEFcP///5EFbZEJvBQAAAAAAAcKKBLuSJEJkgcKKAAAABLunN3tDt3tIGKmyAABsGKm1AAAAAAAAAAAAAAAAAAAABLuaBLu7BR5EBR5EBLuoOb8I8OlLsYaoBLu2MLCzQAABMLC4xR2sBR5EAAAAxRwicXS4BRwABLu1BLupP///xLvQMNclMEgcP///8LC40SV1RR5EGMboGMboEUEtRQAABR2sIPdOAAAAAAAAOqG1OqG1OqG1OqG1AABsBLvJN1sdBLvLIPdOIPdOObgowAACeaCsAAABCH5BAEAABMALAAAAAAQABAAAAipACcIJCEiBIgOGi5UOHBAoMMJI3js0JEDxw0bB3o0nACgo8ePHXto5CiyBwCTKEuKPBCypcmTABgybEkTJowXLljChPnSJM4WOkGCbNGCRQGHHmrQmCEjxk0XRVcQcMhh6YerWD+sUCHA4QamTn+y2JpCgsMMTbNiTYECgkMMYaGOVcH2hAOHFm6qvXrCBAOHFcSSRdG3RAKHFAwYIDAgQIQHDRYoQIAgIAA7';
	$I['avi']=$I['mpg']=$I['mpeg']=$I['mp3']='R0lGODlhEAAQAPcAAEhHSHd2d//+/+/q9+7r9KalqPLx9NrZ3HZ1e4mJjx0dHoeHi+Dg4/n5++np6+jo6tLS1NjY2ZqamxYelholkUBHhIWGjHB2lREwshozpCdDujZPuoOEiIWNqBI7tJWWmdTV2B1NwihTuC9iyDZqzlF60X+Vw/z9/xtbyxZczvb5/h1m0EqA0EZ/z1aP3srd9h502hh24VSc6SuD3oqLjNfY2SGN70ik6cHe9ODn6urv8MTGxnG+AYTVDXiuKaPOX6DEZ+nu4XO3AWWgAU56AYypWoWWaNPcw22pAWacAVyKCTpTCm2bFF+BHHehLEVnAWGNBk9zBXWDV1BhKsbKvZm0VajRMHKKKJG5AUlaBnp9b4ulGoqMgYiIhoKCgLOzseDg325qVf/++dqvAdmvAei7As2oBtCoB8qlB+jAF+jAG6eLE5yDGezHK+fFN4RyIN7AOOTEOuPDO4BuIu3MQ+XIR+rLSuXHSOXHSu3VaO3Wc+7YeIuFa/ry0vz343lxVn16cnh2cMHAvpOOiPjx6evq6eHc2v9zTfV6WfnRxuHLxfvx7v9KG/lHG/hIG/lOIvxNI/dOJP5ZLv5aMexYMvVeOPRjPv9xTP92U/BzU/99Xet2WPKijvWvnu+unvGxofnMwNvLx/r19P////v7+/Ly8uzs7Ojo6Obm5uTk5OLi4uDg4N/f39jY2NbW1tLS0s/Pz87Ozs3NzczMzMfHx7Ozs62traenp56enpycnJqamnl5eWtra2RkZE5OTiEhIRwcHBsbGxMTEwgICAQEBP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAMUALAAAAAAQABAAAAj/AIsJXMRpE6UtPopQMSCwYTFQlRpBeoSFxxAlRg44TBRpEiZNiKz0EJKEiBQIAkVZkoTpU6gINY78QALlCRdVxTw5utSJEK8dDggMAMIkypQCpDIxOqSIEABeu2gJCOKkyRIvq5QeMuTU169hvR5UuZJFC6wWM27kcBqMGDBYDPLAMcNnFosYNnAQUiDsFqwTfuy4OQNolokUMGToGCSowahRe+6oWWMhFggRKFa4eKFCTB89deSM+SOBVbEOHkKMIFGCDh08ccq8+WBLYKELGTBo2NCmTRoyczjkStUQTIIKFCagQcMmDA1crRwWK/WlC4JAARboqnVKekNTrmTJBnqFapTDgAA7';
	$I['java']=$I['jar']='R0lGODlhEAAOAMZ9AP79uv//4/j43f//5f7+5v7+6f//7f//7//8qf/9vf/9wf/+xP/9yf793P/+4f32hP/6iv/6pP/9zP/4kf/4nP/4n/373//1jf/2nP32tvnodfzuff/xhv/3uP/revftrvz32v/ocf/odP/rhPnz0/z44+DAPOHAPe/gnPXrvv3zyM6hAMicAMeaANStJdu4PNy7RODDWN7EaOLIauLIa//10ffuzcudAMiaAMSWAMOVAMGTAL2PALqMAMilLtayPNe2TNW0TNKxTNm7V9e5V82vU9zEd+7jvurfvPXryfbu072NALiKALaIALOEALKDALGCAK+AAMinRMalRMOiRNCuTM6sTMuqTMmnTLyfUdm8ZtW9et3Kl+XUoa19AKp6AK6EG7GHIr2YNr+cQ7iXQ8akTMSjTb6jXs2waMOqbNjEkNDDpM2xctfQwPz8/Pv7+/r6+vX19fHx8ezs7Ovr6+jo6Ofn5+bm5uHh4eDg4N/f397e3t3d3b/BvL/BvL/BvCH+EUNyZWF0ZWQgd2l0aCBHSU1QACH5BAEKAH8ALAAAAAAQAA4AAAdSgH9/LoSFhYKIgoaLMzOJg4uFMTEniZGRloYrJyeGmYUnI52HiIYnKCOLny4nMyiqpYQnNDEis6OfKzEjtqMunyIzIsG+q5yTxbGLK57Kl4SCgQA7';
	$I['rar']=$I['zip']='iVBORw0KGgoAAAANSUhEUgAAAA8AAAAQCAMAAAD+iNU2AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABC1BMVEU1OVUAAABnaX81OlWOk59sb4NAQ140OFQ2OlY2OlVFSGIvM1CChZY1OVVgY3k/RF1rbYI8QFsxNVJ0d4p3fItsboQ8QVsxNVFlaH10d4prboIxNVFHS2Q/Q10yNlI0OVQ2OlY2OlY2OVY2OlU9QVs7P1pBRV8vM1BPU2snK0lCRmAuMk80OVQ2OlY2OlU1OVU2OlU1OlU1OlU1OVU1OVU1OlVNUWoxNVI2OlY3O1dJTWaEh5gzN1M1OVVnan9KTmeEhpc0OFR3eow0OFU+QVxGSmMyNlNKTWc2OlVLTmiGiJlHS2R7fpBYW3Kvsbw7Plr///9FSWM3O1ZcX3acnqw9QVwzN1QtMk82OVaEIlkcAAAANnRSTlMAAAAAAAAAAAAAEOb+/acDAR76kAIBHvn8hgL6/TT+PP47/jweHh76Hvoe+h76Hvk7HvoQ5SjkwatvAAAAAWJLR0RQ425MvAAAAAd0SU1FB+UMEQ85MIQJB0EAAAClSURBVAjXTc7VGoJAEIbhVWzFwBa7OzAY1FUwsDvv/0pcMeA/e5/vYAYhm73n4AFowalzufWI8jD9wRAA0yOvwedHVCA4FolBCk3Cxgjp7MfTWXQeM/2NQYrLCbPaMSQhZXl7oRggvcxYEZVlV2utc8xmy2ucL+z2B0l1sSQeT/z573Llcr3d1V6tyQ9Mrv1cb4CgkLhJ3OLgO6Wjdoc8puzJdakXrbQqCiZ262kAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjEtMTItMTdUMTU6NTc6MzgrMDA6MDDe86BpAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIxLTEyLTE3VDE1OjU3OjM4KzAwOjAwr64Y1QAAAABJRU5ErkJggg==';
	header('Cache-control: max-age=2592000');
	header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T',time()+2592000));
	header('Content-type: image/gif');
	print base64_decode(isset($I[$e])?$I[$e]:$I['file']);
	exit;
}
// End block

// Start configs
$self = basename(isset($_SERVER['SCRIPT_FILENAME']) ? $_SERVER['SCRIPT_FILENAME'] : __FILE__);
$sitename='My files';
$date='M-d-y'; // date format
$ignore=array('.','..','.htaccess','index.php','icon.php','Thumbs.db',$self); // ignore these files
// End configs
$root=dirname(__FILE__);
$dir=isset($_GET['dir'])?$_GET['dir']:'';if(strstr($dir,'..'))$dir='';
$path="$root/$dir/";
$dirs=$files=array();
if(!is_dir($path)||false==($h=opendir($path)))exit('Directory does not exist.');
while(false!==($f=readdir($h)))
{
	if(in_array($f,$ignore))continue;
	if(is_dir($path.$f))$dirs[]=array('name'=>$f,'date'=>filemtime($path.$f),'url'=>$self.'?dir='.rawurlencode(trim("$dir/$f",'/')));
	else$files[]=array('name'=>$f,'size'=>filesize($path.$f),'date'=>filemtime($path.$f),'url'=>trim("$dir/".rawurlencode($f),'/'));
}
closedir($h);
$current_dir_name = basename($dir);
$up_dir=dirname($dir);
$up_url=($up_dir!=''&&$up_dir!='.')?$self.'?dir='.rawurlencode($up_dir):$self;
// END PHP ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
<title><?php print$current_dir_name==''?'Directory list':$current_dir_name?></title>
<style type="text/css">
body { font-family: tahoma, verdana, arial; font-size: 0.7em; color: black; padding-top: 8px; cursor: default; background-color: #fff; }
#idx { border: 3px solid #fff; width: 750px; }
#idx td.center { text-align: center; }
#idx td { border-bottom: 1px solid #f0f0f0; }
#idx img { margin-bottom: -2px; }
#idx table { color: #606060; width: 100%; margin-top:3px; }
#idx span.link { color: #0066DF; cursor: pointer; }
#idx .rounded { padding: 10px 7px 10px 10px; -moz-border-radius:6px; }
#idx .gray { background-color:#fafafa;border-bottom: 1px solid #e5e5e5; }
#idx p { padding: 0px; margin: 0px;line-height:1.4em;}
#idx p.left { float:left;width:60%;padding:3px;color:#606060;}
#idx p.right {float:right;width:35%;text-align:right;color:#707070;padding:3px;}
#idx strong { font-family: "Trebuchet MS", tahoma, arial; font-size: 1.2em; font-weight: bold; color: #202020; padding-bottom: 3px; margin: 0px; }
#idx a:link    { color: #0066CC; }
#idx a:visited { color: #003366; }
#idx a:hover   { text-decoration: none; }
#idx a:active  { color: #9DCC00; }
</style>

<script type="text/javascript">
<!--
var _c1='#fefefe'; var _c2='#fafafa'; var _ppg=25; var _cpg=1; var _files=[]; var _dirs=[]; var _tpg=null; var _tsize=0; var _sort='date'; var _sdir={'type':0,'name':0,'size':0,'date':1}; var idx=null; var tbl=null;
function _obj(s){return document.getElementById(s);}
function _ge(n){n=n.substr(n.lastIndexOf('.')+1);return n.toLowerCase();}
function _nf(n,p){if(p>=0){var t=Math.pow(10,p);return Math.round(n*t)/t;}}
function _s(v,u){if(!u)u='B';if(v>1024&&u=='B')return _s(v/1024,'KB');if(v>1024&&u=='KB')return _s(v/1024,'MB');if(v>1024&&u=='MB')return _s(v/1024,'GB');return _nf(v,1)+'&nbsp;'+u;}
function _f(name,size,date,url,rdate){_files[_files.length]={'dir':0,'name':name,'size':size,'date':date,'type':_ge(name),'url':url,'rdate':rdate,'icon':'<?php print$self?>?icon='+_ge(name)};_tsize+=size;}
function _d(name,date,url){_dirs[_dirs.length]={'dir':1,'name':name,'date':date,'url':url,'icon':'<?php print$self?>?icon=dir'};}
function _np(){_cpg++;_tbl();}
function _pp(){_cpg--;_tbl();}
function _sa(l,r){return(l['size']==r['size'])?0:(l['size']>r['size']?1:-1);}
function _sb(l,r){return(l['type']==r['type'])?0:(l['type']>r['type']?1:-1);}
function _sc(l,r){return(l['rdate']==r['rdate'])?0:(l['rdate']>r['rdate']?1:-1);}
function _sd(l,r){var a=l['name'].toLowerCase();var b=r['name'].toLowerCase();return(a==b)?0:(a>b?1:-1);}
function _srt(c){switch(c){case'type':_sort='type';_files.sort(_sb);if(_sdir['type'])_files.reverse();break;case'name':_sort='name';_files.sort(_sd);if(_sdir['name'])_files.reverse();break;case'size':_sort='size';_files.sort(_sa);if(_sdir['size'])_files.reverse();break;case'date':_sort='date';_files.sort(_sc);if(_sdir['date'])_files.reverse();break;}_sdir[c]=!_sdir[c];_obj('sort_type').style.fontStyle=(c=='type'?'italic':'normal');_obj('sort_name').style.fontStyle=(c=='name'?'italic':'normal');_obj('sort_size').style.fontStyle=(c=='size'?'italic':'normal');_obj('sort_date').style.fontStyle=(c=='date'?'italic':'normal');_tbl();return false;}

function _head()
{
	if(!idx)return;
	_tpg=Math.ceil((_files.length+_dirs.length)/_ppg);
	idx.innerHTML='<div class="rounded gray" style="padding:5px 10px 5px 7px;color:#202020">' +
		'<p class="left">' +
			'<strong><?php print$current_dir_name==''?$sitename:$current_dir_name?></strong><?php print$dir!=''?'&nbsp; (<a href="'.$up_url.'">Back</a>)':''?><br />' + (_files.length+_dirs.length) + ' objects in this folder, ' + _s(_tsize) + ' total.' +
		'</p>' +
		'<p class="right">' +
			'Sort: <span class="link" onmousedown="return _srt(\'name\');" id="sort_name">Name</span>, <span class="link" onmousedown="return _srt(\'type\');" id="sort_type">Type</span>, <span class="link" onmousedown="return _srt(\'size\');" id="sort_size">Size</span>, <span class="link" onmousedown="return _srt(\'date\');" id="sort_date">Date</span>' +
		'</p>' +
		'<div style="clear:both;"></div>' +
	'</div><div id="idx_tbl"></div>';
	tbl=_obj('idx_tbl');
}

function _tbl()
{
	var _cnt=_dirs.concat(_files);if(!tbl)return;if(_cpg>_tpg){_cpg=_tpg;return;}else if(_cpg<1){_cpg=1;return;}var a=(_cpg-1)*_ppg;var b=_cpg*_ppg;var j=0;var html='';
	if(_tpg>1)html+='<p style="padding:5px 5px 0px 7px;color:#202020;text-align:right;"><span class="link" onmousedown="_pp();return false;">Previous</span> ('+_cpg+'/'+_tpg+') <span class="link" onmousedown="_np();return false;">Next</span></p>';
	html+='<table cellspacing="0" cellpadding="5" border="0">';
	for(var i=a;i<b&&i<(_files.length+_dirs.length);++i)
	{
		var f=_cnt[i];var rc=j++&1?_c1:_c2;
		html+='<tr style="background-color:'+rc+'"><td><img src="'+f['icon']+'" alt="" /> &nbsp;<a href="'+f['url']+'">'+f['name']+'</a></td><td class="center" style="width:50px;">'+(f['dir']?'':_s(f['size']))+'</td><td class="center" style="width:70px;">'+f['date']+'</td></tr>';
	}
	tbl.innerHTML=html+'</table>';
}
<?php foreach($dirs as $d) { print sprintf("_d('%s','%s','%s');\n",addslashes($d['name']),date($date,$d['date']),addslashes($d['url'])); } ?>
<?php foreach($files as $f) { print sprintf("_f('%s',%d,'%s','%s',%d);\n",addslashes($f['name']),$f['size'],date($date,$f['date']),addslashes($f['url']),$f['date']); } ?>

window.onload=function()
{
	idx=_obj('idx'); _head(); _srt('name');
};
-->
</script>
</head>
    <link rel="shortcut icon" href="https://cdn.cjstevenson.com/images/main.png"/>
<body>
	<div id="idx"><!-- do not remove --></div>
</body>
</html>