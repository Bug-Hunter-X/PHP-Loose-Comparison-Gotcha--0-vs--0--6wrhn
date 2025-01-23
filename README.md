# PHP Loose Comparison Bug

This example highlights a common pitfall in PHP: the difference between loose and strict comparison.

Loose comparison (`==`) checks for equality of values after type juggling, while strict comparison (`===`) checks for both value and type equality.

The `bug.php` file demonstrates how loose comparison can lead to unexpected results when comparing numbers and strings.

The `bugSolution.php` file shows how using strict comparison (`===`) prevents this problem.

Always prefer strict comparisons in PHP to avoid subtle bugs caused by type juggling.