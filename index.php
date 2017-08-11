<!--
ფორმის მაგალითი, რომელიც თავის მხრივ welcome.php-ს უკავშირდება -->
<!DOCTYPE html>
<html>
<head>
<title>მეოთხე ლექცია</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<div>
<form action="welcome.php" method="get">
გთხოვთ შეიყვანოთ დაბადების დღის მონაცემები: 
<br><br><br>
	წელი:
	<select name="year">
		<option>2000</option>
		<option>1999</option>
		<option>1998</option>
		<option>1997</option>
		<option>1996</option>
		<option>1995</option>
		<option>1994</option>
		<option>1993</option>
		<option>1992</option>
		<option>1991</option>
		<option>1990</option>
		<option>1989</option>
		<option>1988</option>
		<option>1987</option>
		<option>1986</option>
		<option>1985</option>
	</select><br>
	თვე:

	<select name="month">
		<option>იანვარი</option>
		<option>თებერვალი</option>
		<option>მარტი</option>
		<option>აპრილი</option>
		<option>მაისი</option>
		<option>ივნისი</option>
		<option>ივლისი</option>
		<option>აგვისტო</option>
		<option>სექტემბერი</option>
		<option>ოქტომბერი</option>
		<option>ნოემბერი</option>
		<option>დეკემბერი</option>
	</select><br>

	დღე:

	<select name="day">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
		<option>13</option>
		<option>14</option>
		<option>15</option>
		<option>16</option>
		<option>17</option>
		<option>18</option>
		<option>19</option>
		<option>20</option>
		<option>21</option>
		<option>22</option>
		<option>23</option>
		<option>24</option>
		<option>25</option>
		<option>26</option>
		<option>27</option>
		<option>28</option>
		<option>29</option>
		<option>30</option>
		<option>31</option>
	</select> <br><br>

	<input type="submit" value="გაგზავნა">
</form>
</div>
</body>
</html>
