<?php
function startsWith($haystack, $needle)
{
    return $needle === "" || strpos($haystack, $needle) === 0;
}
function endsWith($haystack, $needle)
{
    return $needle === "" || substr($haystack, -strlen($needle)) === $needle;
}

static final class TestResultStateEnum {
	const __default = TestResultStateEnum::NotRunned;
	
	const NotRunned = 0;
	const Success = 1;
	const Fail = 2;
	const Inconclusive = 3;
}
?>