<footer>
	<p>It's power by <a href="https://studio.dev.tencent.com/">Cloud Studio</a></p>
	<p>Theme is design by <a href="http://github.com/lnzu/">Lnzu</a> &copy;2019</p>
</footer>

<script>
	///给所有prismjs添加行内行号
	function addLineNumbers() {
	  var x = document.getElementsByTagName("pre");
	  if (x==null) {
		return;
	  }
	  for (var i = 0; i < x.length; i++) {
		x[i].classList.add("line-numbers");
	  }
	}
	addLineNumbers();
</script>