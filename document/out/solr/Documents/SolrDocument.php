<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrdocument" class="reference">   <h1 class="title">The SolrDocument class</h1>     <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>     <div class="section" id="solrdocument.intro">    <h2 class="title">简介</h2>    <p class="para">     Represents a Solr document retrieved from a query response.    </p>   </div>     <div class="section" id="solrdocument.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <span class="modifier">final</span>       <strong class="classname">SolrDocument</strong>      </span>            <span class="oointerface">implements        <span class="interfacename"><strong class="interfacename">ArrayAccess</strong></span>      </span>       <span class="oointerface">,        <span class="interfacename"><strong class="interfacename">Iterator</strong></span>      </span>       <span class="oointerface">,        <span class="interfacename"><strong class="interfacename">Serializable</strong></span>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrdocument.php#solrdocument.constants.sort-default"><var class="varname">SORT_DEFAULT</var></a></var>      <span class="initializer"> = 1</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrdocument.php#solrdocument.constants.sort-asc"><var class="varname">SORT_ASC</var></a></var>      <span class="initializer"> = 1</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrdocument.php#solrdocument.constants.sort-desc"><var class="varname">SORT_DESC</var></a></var>      <span class="initializer"> = 2</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrdocument.php#solrdocument.constants.sort-field-name"><var class="varname">SORT_FIELD_NAME</var></a></var>      <span class="initializer"> = 1</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrdocument.php#solrdocument.constants.sort-field-value-count"><var class="varname">SORT_FIELD_VALUE_COUNT</var></a></var>      <span class="initializer"> = 2</span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.solrdocument.php#solrdocument.constants.sort-field-boost-value"><var class="varname">SORT_FIELD_BOOST_VALUE</var></a></var>      <span class="initializer"> = 4</span>     ;</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.addfield.php" class="methodname">addField</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldValue</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.clear.php" class="methodname">clear</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.clone.php" class="methodname">__clone</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.construct.php" class="methodname">__construct</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">SolrDocumentField</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.current.php" class="methodname">current</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.deletefield.php" class="methodname">deleteField</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.destruct.php" class="methodname">__destruct</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.fieldexists.php" class="methodname">fieldExists</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">SolrDocumentField</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.get.php" class="methodname">__get</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.getchilddocuments.php" class="methodname">getChildDocuments</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.getchilddocumentscount.php" class="methodname">getChildDocumentsCount</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">SolrDocumentField</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.getfield.php" class="methodname">getField</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.getfieldcount.php" class="methodname">getFieldCount</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.getfieldnames.php" class="methodname">getFieldNames</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">SolrInputDocument</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.getinputdocument.php" class="methodname">getInputDocument</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.haschilddocuments.php" class="methodname">hasChildDocuments</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.isset.php" class="methodname">__isset</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.key.php" class="methodname">key</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.merge.php" class="methodname">merge</a></span>     ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/class.solrdocument.php" class="type SolrDocument">SolrDocument</a></span> <code class="parameter">$sourceDoc</code></span>    [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$overwrite</code><span class="initializer"> = <strong><code>TRUE</code></strong></span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.next.php" class="methodname">next</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.offsetexists.php" class="methodname">offsetExists</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">SolrDocumentField</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.offsetget.php" class="methodname">offsetGet</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.offsetset.php" class="methodname">offsetSet</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldValue</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.offsetunset.php" class="methodname">offsetUnset</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.reset.php" class="methodname">reset</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.rewind.php" class="methodname">rewind</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.serialize.php" class="methodname">serialize</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.set.php" class="methodname">__set</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    , <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldValue</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.sort.php" class="methodname">sort</a></span>     ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$sortOrderBy</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$sortDirection</code><span class="initializer"> = SolrDocument::SORT_ASC</span></span>   ] )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.toarray.php" class="methodname">toArray</a></span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.unserialize.php" class="methodname">unserialize</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$serialized</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.unset.php" class="methodname">__unset</a></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$fieldName</code></span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="http://php.net/manual/zh/solrdocument.valid.php" class="methodname">valid</a></span>     ( <span class="methodparam">void</span>    )</div>     }</div>     </div>        <div class="section" id="solrdocument.constants">    <h2 class="title">预定义常量</h2>    <dl>             <dt id="solrdocument.constants.sort-default"><strong><code>SolrDocument::SORT_DEFAULT</code></strong></dt>       <dd>        <p class="para">Default mode for sorting fields within the document.</p>      </dd>                  <dt id="solrdocument.constants.sort-asc"><strong><code>SolrDocument::SORT_ASC</code></strong></dt>       <dd>        <p class="para">Sorts the fields in ascending order</p>      </dd>                  <dt id="solrdocument.constants.sort-desc"><strong><code>SolrDocument::SORT_DESC</code></strong></dt>       <dd>        <p class="para">Sorts the fields in descending order</p>      </dd>                  <dt id="solrdocument.constants.sort-field-name"><strong><code>SolrDocument::SORT_FIELD_NAME</code></strong></dt>       <dd>        <p class="para">Sorts the fields by field name.</p>      </dd>                  <dt id="solrdocument.constants.sort-field-value-count"><strong><code>SolrDocument::SORT_FIELD_VALUE_COUNT</code></strong></dt>       <dd>        <p class="para">Sorts the fields by number of values in each field.</p>      </dd>                  <dt id="solrdocument.constants.sort-field-boost-value"><strong><code>SolrDocument::SORT_FIELD_BOOST_VALUE</code></strong></dt>       <dd>        <p class="para">Sorts the fields by thier boost values.</p>      </dd>           </dl>    </div>     </div>                                                                                                                                                                                                                                            <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SolrDocument::addField} — Adds a field to the document</li><li>{@link SolrDocument::clear} — Drops all the fields in the document</li><li>{@link SolrDocument::__clone} — Creates a copy of a SolrDocument object</li><li>{@link SolrDocument::__construct} — Constructor</li><li>{@link SolrDocument::current} — Retrieves the current field</li><li>{@link SolrDocument::deleteField} — Removes a field from the document</li><li>{@link SolrDocument::__destruct} — Destructor</li><li>{@link SolrDocument::fieldExists} — Checks if a field exists in the document</li><li>{@link SolrDocument::__get} — Access the field as a property</li><li>{@link SolrDocument::getChildDocuments} — Returns an array of child documents (SolrDocument)</li><li>{@link SolrDocument::getChildDocumentsCount} — Returns the number of child documents</li><li>{@link SolrDocument::getField} — Retrieves a field by name</li><li>{@link SolrDocument::getFieldCount} — Returns the number of fields in this document</li><li>{@link SolrDocument::getFieldNames} — Returns an array of fields names in the document</li><li>{@link SolrDocument::getInputDocument} — Returns a SolrInputDocument equivalent of the object</li><li>{@link SolrDocument::hasChildDocuments} — Checks whether the document has any child documents</li><li>{@link SolrDocument::__isset} — Checks if a field exists</li><li>{@link SolrDocument::key} — Retrieves the current key</li><li>{@link SolrDocument::merge} — Merges source to the current SolrDocument</li><li>{@link SolrDocument::next} — Moves the internal pointer to the next field</li><li>{@link SolrDocument::offsetExists} — Checks if a particular field exists</li><li>{@link SolrDocument::offsetGet} — Retrieves a field</li><li>{@link SolrDocument::offsetSet} — Adds a field to the document</li><li>{@link SolrDocument::offsetUnset} — Removes a field</li><li>{@link SolrDocument::reset} — This is an alias to SolrDocument::clear()</li><li>{@link SolrDocument::rewind} — Resets the internal pointer to the beginning</li><li>{@link SolrDocument::serialize} — Used for custom serialization</li><li>{@link SolrDocument::__set} — Adds another field to the document</li><li>{@link SolrDocument::sort} — Sorts the fields in the document</li><li>{@link SolrDocument::toArray} — Returns an array representation of the document</li><li>{@link SolrDocument::unserialize} — Custom serialization of SolrDocument objects</li><li>{@link SolrDocument::__unset} — Removes a field from the document</li><li>{@link SolrDocument::valid} — Checks if the current position internally is still valid</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.solr.php">Solr</a></div></div>
*/
final class SolrDocument implements ArrayAccess, Iterator, Serializable {

	/** @var int Sorts the fields in ascending order. */
	const SORT_DEFAULT = 1 ;

	/** @var int Sorts the fields in ascending order. */
	const SORT_ASC = 1 ;

	/** @var int Sorts the fields in descending order. */
	const SORT_DESC = 2 ;

	/** @var int Sorts the fields by name */
	const SORT_FIELD_NAME = 1 ;

	/** @var int Sorts the fields by number of values. */
	const SORT_FIELD_VALUE_COUNT = 2 ;

	/** @var int Sorts the fields by boost value. */
	const SORT_FIELD_BOOST_VALUE = 4 ;

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Adds a field to the document
	 * @link http://php.net/manual/en/solrdocument.addfield.php
	 * @param string $fieldName <p>
	 * The name of the field
	 * </p>
	 * @param string $fieldValue <p>
	 * The value for the field.
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function addField($fieldName, $fieldValue) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Drops all the fields in the document
	 * @link http://php.net/manual/en/solrdocument.clear.php
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function clear() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Creates a copy of a SolrDocument object
	 * @link http://php.net/manual/en/solrdocument.clone.php
	 */
	public function __clone() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * SolrDocument constructor.
	 * @link http://php.net/manual/en/solrdocument.construct.php
	 */
	public function __construct () {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Retrieves the current field
	 * @link http://php.net/manual/en/solrdocument.current.php
	 * @return SolrDocumentField <p>
	 * Returns the field
	 * </p>
	 */
/**
*<div id="function.current" class="refentry">    <div class="refnamediv">     <h1 class="refname">current</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">current</span> &mdash; <span class="dc-title">返回数组中的当前单元</span></p>     </div>      <div class="refsect1 description" id="refsect1-function.current-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>current</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$array</code></span>    )</div>      <p class="para rdfs-comment">      每个数组中都有一个内部的指针指向它“当前的”单元，初始指向插入到数组中的第一个单元。     </p>    </div>       <div class="refsect1 parameters" id="refsect1-function.current-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        这个数组。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.current-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong>current()</strong></span> 函数返回当前被内部指针指向的数组单元的值，并不移动指针。如果内部指针指向超出了单元列表的末端，<span class="function"><strong>current()</strong></span>      返回 <strong><code>FALSE</code></strong>。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><code>FALSE</code></strong>，但也可能返回等同于 <strong><code>FALSE</code></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>   <div class="refsect1 examples" id="refsect1-function.current-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6087">     <p><strong>Example #1 使用  <span class="function"><strong>current()</strong></span> 系列函数的例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$transport&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'car'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">prev</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">end</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /><br /></span><span style="color: #9876AA">$arr&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$arr</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;bool(false)<br /><br /></span><span style="color: #9876AA">$arr&nbsp;</span><span style="color: #007700">=&nbsp;array(array());<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$arr</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;array(0)&nbsp;{&nbsp;}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>   <div class="refsect1 notes" id="refsect1-function.current-notes">   <h3 class="title">注释</h3>   <blockquote class="note"><p><strong class="note">Note</strong>:     <span class="simpara">     如果数组包含 <span class="type"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean">boolean</a></span> <strong><code>FALSE</code></strong> 的单元则本函数在碰到这个单元时也返回        <strong><code>FALSE</code></strong>，使得不可能判断是否到了此数组列表的末端。     要正确遍历可能含有空单元的数组，用 <span class="function">{@link each()}</span> 函数。    </span>   </p></blockquote>  </div>   <div class="refsect1 seealso" id="refsect1-function.current-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link key()} - 从关联数组中取得键名</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>     <li class="member"><span class="function">{@link reset()} - 将数组的内部指针指向第一个单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>    </ul>   </p>  </div>         <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function current() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes a field from the document
	 * @link http://php.net/manual/en/solrdocument.deletefield.php
	 * @param string $fieldName <p>
	 * The name of the field.
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function deleteField($fieldName) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Destructor
	 * @link http://php.net/manual/en/solrdocument.destruct.php
	 */
	public function __destruct() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Checks if a field exists in the document
	 * @link http://php.net/manual/en/solrdocument.fieldexists.php
	 * @param string $fieldName <p>
	 * Name of the field.
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> if the field is present and <b>FALSE</b> if it does not.
	 * </p>
	 */
	public function fieldExists($fieldName) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Access the field as a property
	 * @link http://php.net/manual/en/solrdocument.get.php
	 * @param string $fieldName <p>
	 * The name of the field.
	 * <p/>
	 * @return SolrDocumentField <p>
	 * Returns a SolrDocumentField instance.
	 * </p>
	 */
	public function __get($fieldName) {}

	/**
	 * (PECL solr &gt;= 2.3.0)<br/>
	 * Returns an array of child documents (SolrInputDocument)
	 * @link http://php.net/manual/en/solrdocument.getchilddocuments.php
	 * @return SolrInputDocument[]
	 */
	public function getChildDocuments() {}

	/**
	 * (PECL solr &gt;= 2.3.0)<br/>
	 * Returns the number of child documents
	 * @link http://php.net/manual/en/solrdocument.getchilddocumentscount.php
	 * @return int
	 */
	public function getChildDocumentsCount() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Retrieves a field by name
	 * @link http://php.net/manual/en/solrdocument.getfield.php
	 * @param string $fieldName <p>
	 * The name of the field.
	 * </p>
	 * @return SolrDocumentField<p>
	 * Returns a SolrDocumentField object on success and <b>FALSE</b> on failure.
	 * </p>
	 */
	public function getField($fieldName) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the number of fields in this document
	 * @link http://php.net/manual/en/solrdocument.getfieldcount.php
	 * @return int <p>
	 * Returns an integer on success and <b>FALSE</b> on failure.
	 * </p>
	 */
	public function getFieldCount() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns an array containing all the fields in the document
	 * @link http://php.net/manual/en/solrdocument.getfieldnames.php
	 * @return array <p>
	 * Returns an array on success and <b>FALSE</b> on failure.
	 * </p>
	 */
	public function getFieldNames() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns a SolrInputDocument equivalent of the object
	 * @link http://php.net/manual/en/solrdocument.getinputdocument.php
	 * @return SolrInputDocument <p>
	 * Returns a SolrInputDocument on success and <b>NULL</b> on failure.
	 * </p>
	 */
	public function getInputDocument() {}

	/**
	 * (PECL solr &gt;= 2.3.0)<br/>
	 * Checks whether the document has any child documents
	 * @link http://php.net/manual/en/solrdocument.haschilddocuments.php
	 * @return bool <p>
	 * Returns <b>TRUE</b> if the document has any child documents
	 * </p>
	 */
	public function hasChildDocuments() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Checks if a field exists
	 * @link http://php.net/manual/en/solrdocument.isset.php
	 * @param string $fieldName <p>
	 * Name of the field.
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function __isset($fieldName) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Retrieves the current key
	 * @link http://php.net/manual/en/solrdocument.key.php
	 * @return string <p>
	 * Returns the current key.
	 * </p>
	 */
/**
*<div id="function.key" class="refentry">    <div class="refnamediv">     <h1 class="refname">key</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">key</span> &mdash; <span class="dc-title">从关联数组中取得键名</span></p>     </div>  <div class="refsect1 description" id="refsect1-function.key-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>key</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter">$array</code></span>    )</div>      <p class="para rdfs-comment">      <span class="function"><strong>key()</strong></span> 返回数组中当前单元的键名。     </p>    </div>    <div class="refsect1 parameters" id="refsect1-function.key-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        该数组。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.key-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong>key()</strong></span> 函数返回数组中内部指针指向的当前单元的键名。    但它不会移动指针。如果内部指针超过了元素列表尾部，或者数组是空的，<span class="function"><strong>key()</strong></span> 会返回 <strong><code>NULL</code></strong>。   </p>  </div>   <div class="refsect1 changelog" id="refsect1-function.key-changelog">   <h3 class="title">更新日志</h3>   <p class="para">    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>7.0.0</td>        <td>         <code class="parameter">array</code> 现在总是会传值。          在此之前，它会尽可能传引用，否则就传值。        </td>       </tr>       </tbody>         </table>    </p>  </div>   <div class="refsect1 examples" id="refsect1-function.key-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6095">     <p><strong>Example #1 <span class="function"><strong>key()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$array&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit1'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit2'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'orange'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit3'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'grape'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit4'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fruit5'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;this&nbsp;cycle&nbsp;echoes&nbsp;all&nbsp;associative&nbsp;array<br />//&nbsp;key&nbsp;where&nbsp;value&nbsp;equals&nbsp;"apple"<br /></span><span style="color: #007700">while&nbsp;(</span><span style="color: #9876AA">$fruit_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #9876AA">$fruit_name&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">key</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">).</span><span style="color: #DD0000">'&lt;br&nbsp;/&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> fruit1&lt;br /&gt; fruit4&lt;br /&gt; fruit5&lt;br /&gt; </pre></div>     </div>    </div>   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.key-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>     <li class="member"><a href="http://php.net/manual/zh/control-structures.foreach.php" class="link">foreach</a></li>    </ul>   </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function key() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Merges one input document into another
	 * @link http://php.net/manual/en/solrdocument.merge.php
	 * @param SolrDocument $sourceDoc <p>
	 * The source document.
	 * </p>
	 * @param bool $overwrite [optional] <p>
	 * If this is <b>TRUE</b> then fields with the same name in the destination document will be overwritten.
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function merge(SolrInputDocument $sourceDoc, $overwrite = true) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Moves the internal pointer to the next field
	 * @link http://php.net/manual/en/solrdocument.next.php
	 */
/**
*<div id="function.next" class="refentry">    <div class="refnamediv">     <h1 class="refname">next</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">next</span> &mdash; <span class="dc-title">      将数组中的内部指针向前移动一位     </span></p>     </div>  <div class="refsect1 description" id="refsect1-function.next-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>next</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$array</code></span>    )</div>     <p class="para rdfs-comment">      <span class="function"><strong>next()</strong></span> 和 <span class="function">{@link current()}</span>      的行为类似，只有一点区别，在返回值之前将内部指针向前移动一位。这意味着它返回的是下一个数组单元的值并将数组指针向前移动了一位。     </p>    </div>      <div class="refsect1 parameters" id="refsect1-function.next-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        受影响的 <span class="type"><a href="http://php.net/manual/zh/language.types.array.php" class="type array">array</a></span> 。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.next-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回数组内部指针指向的下一个单元的值，或当没有更多单元时返回 <strong><code>FALSE</code></strong>。   </p>   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">此函数可能返回布尔值 <strong><code>FALSE</code></strong>，但也可能返回等同于 <strong><code>FALSE</code></strong> 的非布尔值。请阅读 <a href="http://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用 <a href="http://php.net/manual/zh/language.operators.comparison.php" class="link">=== 运算符</a>来测试此函数的返回值。</p></div>  </div>    <div class="refsect1 examples" id="refsect1-function.next-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6107">     <p><strong>Example #1  <span class="function"><strong>next()</strong></span> 及相关函数的用法示例</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$transport&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'car'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'foot';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'car';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">prev</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'bike';<br /></span><span style="color: #9876AA">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">end</span><span style="color: #007700">(</span><span style="color: #9876AA">$transport</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$mode&nbsp;=&nbsp;'plane';<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>    <div class="refsect1 notes" id="refsect1-function.next-notes">   <h3 class="title">注释</h3>   <blockquote class="note"><p><strong class="note">Note</strong>:     <span class="simpara">      你将无法区别包含数组尾以及 <span class="type"><a href="http://php.net/manual/zh/language.types.boolean.php" class="type boolean">boolean</a></span> <strong><code>FALSE</code></strong> 单元的数组。要正确遍历可能含有空单元或者单元值为 0 的数组，参见    <span class="function">{@link each()}</span> 函数。    </span>   </p></blockquote>  </div>    <div class="refsect1 seealso" id="refsect1-function.next-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>     <li class="member"><span class="function">{@link reset()} - 将数组的内部指针指向第一个单元</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>    </ul>   </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function next() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Checks if a particular field exists
	 * @link http://php.net/manual/en/solrdocument.offsetexists.php
	 * @param string $fieldName <p>
	 * The name of the field.
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function offsetExists($fieldName) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Retrieves a field
	 * @link http://php.net/manual/en/solrdocument.offsetget.php
	 * @param string $fieldName <p>
	 * The name of the field.
	 * </p>
	 * @return SolrDocumentField <p>
	 * Returns a SolrDocumentField object.
	 * </p>
	 */
	public function offsetGet($fieldName) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Adds a field to the document
	 * @link http://php.net/manual/en/solrdocument.offsetset.php
	 * @param string $fieldName <p>
	 * The name of the field.
	 * </p>
	 * @param string $fieldValue <p>
	 * The value for this field.
	 * </p>
	 * @TODO: Check -> doc indicate void function but return is set at true/false
	 */
	public function offsetSet($fieldName , $fieldValue) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes a field
	 * @link http://php.net/manual/en/solrdocument.offsetunset.php
	 * @param string $fieldName <p>
	 * The name of the field.
	 * </p>
	 */
	public function offsetUnset($fieldName) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * This is an alias of SolrDocument::clear
	 * @link http://php.net/manual/en/solrdocument.reset.php
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
/**
*<div id="function.reset" class="refentry">  <div class="refnamediv">   <h1 class="refname">reset</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">reset</span> &mdash; <span class="dc-title">将数组的内部指针指向第一个单元</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.reset-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>reset</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$array</code></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong>reset()</strong></span> 将 <code class="parameter">array</code>    的内部指针倒回到第一个单元并返回第一个数组单元的值。   </p>  </div>   <div class="refsect1 parameters" id="refsect1-function.reset-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        输入的数组。       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.reset-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回数组第一个单元的值，如果数组为空则返回 <strong><code>FALSE</code></strong>。   </p>  </div>   <div class="refsect1 examples" id="refsect1-function.reset-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6110">     <p><strong>Example #1 <span class="function"><strong>reset()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$array&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'step&nbsp;one'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;two'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;three'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'step&nbsp;four'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;by&nbsp;default,&nbsp;the&nbsp;pointer&nbsp;is&nbsp;on&nbsp;the&nbsp;first&nbsp;element<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;one"<br /><br />//&nbsp;skip&nbsp;two&nbsp;steps<br /></span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;three"<br /><br />//&nbsp;reset&nbsp;pointer,&nbsp;start&nbsp;again&nbsp;on&nbsp;step&nbsp;one<br /></span><span style="color: #9876AA">reset</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">current</span><span style="color: #007700">(</span><span style="color: #9876AA">$array</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;br&nbsp;/&gt;\n"</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;"step&nbsp;one"<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>   <div class="refsect1 seealso" id="refsect1-function.reset-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link current()} - 返回数组中的当前单元</span></li>     <li class="member"><span class="function">{@link each()} - 返回数组中当前的键／值对并将数组指针向前移动一步</span></li>     <li class="member"><span class="function">{@link end()} - 将数组的内部指针指向最后一个单元</span></li>     <li class="member"><span class="function">{@link next()} - 将数组中的内部指针向前移动一位</span></li>     <li class="member"><span class="function">{@link prev()} - 将数组的内部指针倒回一位</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function reset() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Resets the internal pointer to the beginning
	 * @link http://php.net/manual/en/solrdocument.rewind.php
	 */
/**
*<div id="function.rewind" class="refentry">  <div class="refnamediv">   <h1 class="refname">rewind</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">rewind</span> &mdash; <span class="dc-title">倒回文件指针的位置</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.rewind-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>rewind</strong></span>     ( <span class="methodparam"><span class="type">resource</span> <code class="parameter">$handle</code></span>    )</div>    <p class="para rdfs-comment">    将 <code class="parameter">handle</code> 的文件位置指针设为文件流的开头。   </p>   <blockquote class="note"><p><strong class="note">Note</strong>:     <p class="para">     如果将文件以附加（&quot;a&quot; 或者 &quot;a+&quot;）模式打开，写入文件的任何数据总是会被附加在后面，不管文件指针的位置。    </p>   </p></blockquote>  </div>    <div class="refsect1 parameters" id="refsect1-function.rewind-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">handle</code></dt>       <dd>        <p class="para">        文件指针必须合法，并且指向由 <span class="function">{@link fopen()}</span>    成功打开的文件。       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.rewind-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>    <div class="refsect1 examples" id="refsect1-function.rewind-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-2838">     <p><strong>Example #1 <span class="function"><strong>rewind()</strong></span> overwriting example</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$handle&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'output.txt'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'r+'</span><span style="color: #007700">);<br /><br /></span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Really&nbsp;long&nbsp;sentence.'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">rewind</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Foo'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">rewind</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #9876AA">fread</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">filesize</span><span style="color: #007700">(</span><span style="color: #DD0000">'output.txt'</span><span style="color: #007700">));<br /><br /></span><span style="color: #9876AA">fclose</span><span style="color: #007700">(</span><span style="color: #9876AA">$handle</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程的输出类似于：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> Foolly long sentence. </pre></div>     </div>    </div>   </p>  </div>    <div class="refsect1 seealso" id="refsect1-function.rewind-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link fread()} - 读取文件（可安全用于二进制文件）</span></li>     <li class="member"><span class="function">{@link fseek()} - 在文件指针中定位</span></li>     <li class="member"><span class="function">{@link ftell()} - 返回文件指针读/写的位置</span></li>     <li class="member"><span class="function">{@link fwrite()} - 写入文件（可安全用于二进制文件）</span></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.filesystem.php">文件系统函数</a></div></div>
*/
	public function rewind() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Used for custom serialization
	 * @link http://php.net/manual/en/solrdocument.serialize.php
	 * @return string <p>
	 * Returns a string representing the serialized Solr document.
	 * </p>
	 */
/**
*<div id="function.serialize" class="refentry">    <div class="refnamediv">     <h1 class="refname">serialize</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">serialize</span> &mdash; <span class="dc-title">      产生一个可存储的值的表示     </span></p>     </div>    <div class="refsect1 unknown-seealsp" id="refsect1-function.serialize-unknown-seealsp">     <h3 class="title">描述</h3>      <div class="methodsynopsis dc-description">       <span class="type">string</span> <span class="methodname"><strong>serialize</strong></span>        ( <span class="methodparam"><span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>       )</div>      <p class="simpara">      <span class="function"><strong>serialize()</strong></span> 返回字符串，此字符串包含了表示       <code class="parameter">value</code> 的字节流，可以存储于任何地方。     </p>     <p class="simpara">      这有利于存储或传递 PHP 的值，同时不丢失其类型和结构。     </p>    <p class="simpara">     想要将已序列化的字符串变回 PHP 的值，可使用     <span class="function">{@link unserialize()}</span>。<span class="function"><strong>serialize()</strong></span>     可处理除了 <span class="type"><a href="http://php.net/manual/zh/language.types.resource.php" class="type resource">resource</a></span>      之外的任何类型。甚至可以 <span class="function"><strong>serialize()</strong></span> 那些包含了指向其自身引用的数组。你正      <span class="function"><strong>serialize()</strong></span>  的数组／对象中的引用也将被存储。    </p>    <p class="simpara">    当序列化对象时，PHP 将试图在序列动作之前调用该对象的成员函数    <span class="function"><strong>__sleep()</strong></span>。这样就允许对象在被序列化之前做任何清除操作。类似的，当使用     <span class="function">{@link unserialize()}</span> 恢复对象时， 将调用    <span class="function"><strong>__wakeup()</strong></span> 成员函数。    </p>        <blockquote class="note"><p><strong class="note">Note</strong>:      <p class="para">      在 PHP 3 中，对象属性将被序列化，但是方法则会丢失。PHP 4       打破了此限制，可以同时存储属性和方法。请参见<a href="http://php.net/manual/zh/language.oop5.php" class="link">类与对象</a>中的<a href="http://php.net/manual/zh/language.oop5.serialization.php" class="link">序列化对象</a>部分获取更多信息。     </p>    </p></blockquote>     <p class="para">      <div class="example" id="example-6362">       <p><strong>Example #1 <span class="function"><strong>serialize()</strong></span> 示例</strong></p>       <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;$session_data&nbsp;是包含了当前用户&nbsp;session&nbsp;信息的多维数组。<br />//&nbsp;我们使用&nbsp;serialize()&nbsp;在请求结束之前将其存储到数据库中。<br /><br /></span><span style="color: #9876AA">$conn&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_connect&nbsp;</span><span style="color: #007700">(</span><span style="color: #DD0000">"webdb"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"php"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"chicken"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$stmt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_prepare&nbsp;</span><span style="color: #007700">(</span><span style="color: #9876AA">$conn</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"UPDATE&nbsp;sessions&nbsp;SET&nbsp;data&nbsp;=&nbsp;?&nbsp;WHERE&nbsp;id&nbsp;=&nbsp;?"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$sqldata&nbsp;</span><span style="color: #007700">=&nbsp;array&nbsp;(</span><span style="color: #9876AA">serialize</span><span style="color: #007700">(</span><span style="color: #9876AA">$session_data</span><span style="color: #007700">),&nbsp;</span><span style="color: #9876AA">$PHP_AUTH_USER</span><span style="color: #007700">);<br />if&nbsp;(!</span><span style="color: #9876AA">odbc_execute&nbsp;</span><span style="color: #007700">(</span><span style="color: #9876AA">$stmt</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #9876AA">$sqldata</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$stmt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_prepare</span><span style="color: #007700">(</span><span style="color: #9876AA">$conn</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"INSERT&nbsp;INTO&nbsp;sessions&nbsp;(id,&nbsp;data)&nbsp;VALUES(?,&nbsp;?)"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #9876AA">odbc_execute</span><span style="color: #007700">(</span><span style="color: #9876AA">$stmt</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #9876AA">$sqldata</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;出错&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>       </div>       </div>     </p>    <p class="para">     参见：<span class="function">{@link unserialize()}</span>。    </p>    </div>    <div class="up"><a href="http://php.net/manual/zh/ref.var.php">Variable handling 函数</a></div></div>
*/
	public function serialize() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Adds another field to the document
	 * @link http://php.net/manual/en/solrdocument.set.php
	 * @param string $fieldName <p>
	 * Name of the field.
	 * </p>
	 * @param string $fieldValue <p>
	 * Field value.
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function __set($fieldName, $fieldValue) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sorts the fields within the document
	 * @link http://php.net/manual/en/solrdocument.sort.php
	 * @param int $sortOrderBy <p>
	 * The sort criteria, must be one of :
	 * <ul>
	 * <li>SolrDocument::SORT_FIELD_NAME</li>
	 * <li>SolrDocument::SORT_FIELD_BOOST_VALUE</li>
	 * <li>SolrDocument::SORT_FIELD_VALUE_COUNT</li>
	 * </ul>
	 * </p>
	 * @param int $sortDirection [optional] <p>
	 * The sort direction, can be one of :
	 * <ul>
	 * <li>SolrDocument::SORT_DEFAULT</li>
	 * <li>SolrDocument::SORT_ASC</li>
	 * <li>SolrDocument::SORT_DESC</li>
	 * </ul>
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
/**
*<div id="function.sort" class="refentry">  <div class="refnamediv">   <h1 class="refname">sort</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">sort</span> &mdash; <span class="dc-title">对数组排序</span></p>   </div>  <div class="refsect1 description" id="refsect1-function.sort-description">   <h3 class="title">说明</h3>    <div class="methodsynopsis dc-description">    <span class="type">bool</span> <span class="methodname"><strong>sort</strong></span>     ( <span class="methodparam"><span class="type">array</span> <code class="parameter reference">&$array</code></span>    [, <span class="methodparam"><span class="type">int</span> <code class="parameter">$sort_flags</code><span class="initializer"> = SORT_REGULAR</span></span>   ] )</div>    <p class="para rdfs-comment">    本函数对数组进行排序。当本函数结束时数组单元将被从最低到最高重新安排。   </p>   <blockquote class="note"><p><strong class="note">Note</strong>:   <p class="para">   If two members compare as equal, their relative order in the sorted array is undefined.  </p> </p></blockquote>   </div>   <div class="refsect1 parameters" id="refsect1-function.sort-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">array</code></dt>       <dd>        <p class="para">        要排序的数组。       </p>      </dd>                 <dt> <code class="parameter">sort_flags</code></dt>       <dd>        <p class="para">        可选的第二个参数 <code class="parameter">sort_flags</code>    可以用以下值改变排序的行为：       </p>       <p class="para">        排序类型标记：        <ul class="itemizedlist">         <li class="listitem">          <span class="simpara"><strong><code>SORT_REGULAR</code></strong>  - 正常比较单元（不改变类型）</span>         </li>         <li class="listitem">          <span class="simpara"><strong><code>SORT_NUMERIC</code></strong> - 单元被作为数字来比较</span>         </li>         <li class="listitem">          <span class="simpara"><strong><code>SORT_STRING</code></strong> - 单元被作为字符串来比较</span>         </li>         <li class="listitem">          <span class="simpara"> <strong><code>SORT_LOCALE_STRING</code></strong> -       根据当前的区域（locale）设置来把单元当作字符串比较，可以用       <span class="function">{@link setlocale()}</span> 来改变。          </span>         </li>         <li class="listitem">          <span class="simpara"><strong><code>SORT_NATURAL</code></strong> - 和 <span class="function">{@link natsort()}</span> 类似对每个单元以“自然的顺序”对字符串进行排序。 PHP 5.4.0 中新增的。</span>         </li>         <li class="listitem">          <span class="simpara"><strong><code>SORT_FLAG_CASE</code></strong> - 能够与 <strong><code>SORT_STRING</code></strong> 或           <strong><code>SORT_NATURAL</code></strong> 合并（OR 位运算），不区分大小写排序字符串。</span>         </li>        </ul>       </p>      </dd>          </dl>    </p>  </div>   <div class="refsect1 returnvalues" id="refsect1-function.sort-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><code>TRUE</code></strong>， 或者在失败时返回 <strong><code>FALSE</code></strong>。   </p>  </div>   <div class="refsect1 changelog" id="refsect1-function.sort-changelog">   <h3 class="title">更新日志</h3>   <table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>      </thead>      <tbody class="tbody">      <tr>       <td>5.4.0</td>       <td>        添加了 <code class="parameter">sort_flags</code> 内 <strong><code>SORT_NATURAL</code></strong> 和        <strong><code>SORT_FLAG_CASE</code></strong> 的支持。        </td>      </tr>       <tr>       <td>5.0.2</td>       <td>        添加了  <strong><code>SORT_LOCALE_STRING</code></strong>。       </td>      </tr>      </tbody>       </table>   </div>   <div class="refsect1 examples" id="refsect1-function.sort-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6113">     <p><strong>Example #1 <span class="function"><strong>sort()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$fruits&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">"lemon"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"orange"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"banana"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"apple"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">sort</span><span style="color: #007700">(</span><span style="color: #9876AA">$fruits</span><span style="color: #007700">);<br />foreach&nbsp;(</span><span style="color: #9876AA">$fruits&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #9876AA">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">$val</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"fruits["&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$key&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"]&nbsp;=&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$val&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> fruits[0] = apple fruits[1] = banana fruits[2] = lemon fruits[3] = orange </pre></div>     </div>    </div>   </p>   <p class="para">    fruits 被按照字母顺序排序。   </p>   <p class="para">    <div class="example" id="example-6114">     <p><strong>Example #2 使用不区分大小写自然排序的 <span class="function"><strong>sort()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /><br />$fruits&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"Orange1"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"orange2"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Orange3"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"orange20"<br /></span><span style="color: #007700">);<br /></span><span style="color: #9876AA">sort</span><span style="color: #007700">(</span><span style="color: #9876AA">$fruits</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">SORT_NATURAL&nbsp;</span><span style="color: #007700">|&nbsp;</span><span style="color: #9876AA">SORT_FLAG_CASE</span><span style="color: #007700">);<br />foreach&nbsp;(</span><span style="color: #9876AA">$fruits&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #9876AA">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #9876AA">$val</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"fruits["&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$key&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"]&nbsp;=&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">$val&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen"> <div class="cdata"><pre> fruits[0] = Orange1 fruits[1] = orange2 fruits[2] = Orange3 fruits[3] = orange20 </pre></div>     </div>    </div>   </p>   <p class="para">    fruits 排序得像 <span class="function">{@link natcasesort()}</span> 的结果。   </p>  </div>   <div class="refsect1 notes" id="refsect1-function.sort-notes">   <h3 class="title">注释</h3>   <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">此函数为 <code class="parameter">array</code> 中的元素赋与新的键名。这将删除原有的键名，而不是仅仅将键名重新排序。</span></p></blockquote>   <blockquote class="note"><p><strong class="note">Note</strong>:     <span class="simpara">     和大多数 PHP 排序函数一样，<span class="function"><strong>sort()</strong></span>      使用了 <a href="http://en.wikipedia.org/wiki/Quicksort" class="link external">&raquo;&nbsp;Quicksort</a> 实现的。     The pivot is chosen in the middle of the partition resulting in an optimal     time for already sorted arrays. This is however an implementation detail you     shouldn&#039;t rely on.    </span>   </p></blockquote>   <div class="warning"><strong class="warning">Warning</strong>    <p class="simpara">     在对含有混合类型值的数组排序时要小心，因为     <span class="function"><strong>sort()</strong></span> 可能会产生不可预知的结果。    </p>   </div>  </div>   <div class="refsect1 seealso" id="refsect1-function.sort-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link asort()} - 对数组进行排序并保持索引关系</span></li>     <li class="member"><a href="http://php.net/manual/zh/array.sorting.php" class="link">数组排序函数对比</a></li>    </ul>   </p>  </div>  <div class="up"><a href="http://php.net/manual/zh/ref.array.php">数组 函数</a></div></div>
*/
	public function sort($sortOrderBy, $sortDirection = SolrInputDocument::SORT_ASC) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns an array representation of the document
	 * @link SolrDocument
	 * @return array <p>
	 * Returns an array representation of the document.
	 * </p>
	 */
	public function toArray() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Custom serialization of SolrDocument objects
	 * @link http://php.net/manual/en/solrdocument.unserialize.php
	 * @param string $serialized <p>
	 * An XML representation of the document.
	 * </p>
	 */
/**
*<div id="function.unserialize" class="refentry">    <div class="refnamediv">     <h1 class="refname">unserialize</h1>     <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">unserialize</span> &mdash; <span class="dc-title">      从已存储的表示中创建 PHP 的值     </span></p>     </div>      <div class="refsect1 description" id="refsect1-function.unserialize-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="type"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>unserialize</strong></span>     ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$str</code></span>    )</div>      <p class="simpara">      <span class="function"><strong>unserialize()</strong></span> 对单一的已序列化的变量进行操作，将其转换回       PHP 的值。     </p>    </div>    <div class="refsect1 parameters" id="refsect1-function.unserialize-parameters">   <h3 class="title">参数</h3>   <p class="para">    <dl>            <dt> <code class="parameter">str</code></dt>       <dd>        <p class="para">        序列化后的字符串。       </p>       <p class="para">        若被解序列化的变量是一个对象，在成功地重新构造对象之后，PHP      会自动地试图去调用 <a href="http://php.net/manual/zh/language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a>      成员函数（如果存在的话）。       </p>       <p class="para">        <blockquote class="note"><p><strong class="note">Note</strong>:          <strong>unserialize_callback_func 指令</strong><br />         <p class="para">         如果在解序列化的时候需要实例化一个未定义类，则可以设置回调函数以供调用（以免得到的是不完整的       <span class="type"><a href="http://php.net/manual/zh/language.types.object.php" class="type object">object</a></span> “__PHP_Incomplete_Class”）。可通过       <var class="filename">php.ini</var>、<span class="function">{@link ini_set()}</span> 或 <var class="filename">.htaccess</var>        定义‘unserialize_callback_func’。每次实例化一个未定义类时它都会被调用。若要禁止这个特性，只需置空此设定。         </p>        </p></blockquote>       </p>      </dd>          </dl>    </p>  </div>    <div class="refsect1 returnvalues" id="refsect1-function.unserialize-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    返回的是转换之后的值，可为       <span class="type"><a href="http://php.net/manual/zh/language.types.integer.php" class="type integer">integer</a></span>、<span class="type"><a href="http://php.net/manual/zh/language.types.float.php" class="type float">float</a></span>、<span class="type"><a href="http://php.net/manual/zh/language.types.string.php" class="type string">string</a></span>、<span class="type"><a href="http://php.net/manual/zh/language.types.array.php" class="type array">array</a></span>      或 <span class="type"><a href="http://php.net/manual/zh/language.types.object.php" class="type object">object</a></span>。      </p>   <p class="para">    如果传递的字符串不可解序列化，则返回 <strong><code>FALSE</code></strong>，并产生一个 <strong><code>E_NOTICE</code></strong>。   </p>  </div>    <div class="refsect1 changelog" id="refsect1-function.unserialize-changelog">   <h3 class="title">更新日志</h3>   <p class="para">    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>4.2.0</td>        <td>         添加了 unserialize_callback_func 指令。        </td>       </tr>       </tbody>         </table>    </p>  </div>    <div class="refsect1 examples" id="refsect1-function.unserialize-examples">   <h3 class="title">范例</h3>   <p class="para">    <div class="example" id="example-6364">     <p><strong>Example #1 <span class="function"><strong>unserialize()</strong></span> 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;这里，我们使用&nbsp;unserialize()&nbsp;装载来自数据库的&nbsp;$session_data&nbsp;数组中的会话数据。<br />//&nbsp;此例是描述&nbsp;serialize()&nbsp;的那个例子的补充。<br /><br /></span><span style="color: #9876AA">$conn&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"webdb"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"php"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"chicken"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$stmt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">odbc_prepare</span><span style="color: #007700">(</span><span style="color: #9876AA">$conn</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"SELECT&nbsp;data&nbsp;FROM&nbsp;sessions&nbsp;WHERE&nbsp;id&nbsp;=&nbsp;?"</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$sqldata&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #9876AA">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'PHP_AUTH_USER'</span><span style="color: #007700">]);<br />if&nbsp;(!</span><span style="color: #9876AA">odbc_execute</span><span style="color: #007700">(</span><span style="color: #9876AA">$stmt</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$sqldata</span><span style="color: #007700">)&nbsp;||&nbsp;!</span><span style="color: #9876AA">odbc_fetch_into</span><span style="color: #007700">(</span><span style="color: #9876AA">$stmt</span><span style="color: #007700">,&nbsp;</span><span style="color: #9876AA">$tmp</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;如果执行出错或返回错误，则初始化为空数组<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$session_data&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;现在我们需要的是&nbsp;$tmp[0]&nbsp;中已序列化的数据。<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$session_data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">unserialize</span><span style="color: #007700">(</span><span style="color: #9876AA">$tmp</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #9876AA">is_array</span><span style="color: #007700">(</span><span style="color: #9876AA">$session_data</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;出错，初始化为空数组<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$session_data&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>   <p class="para">    <div class="example" id="example-6365">     <p><strong>Example #2 unserialize_callback_func 例子</strong></p>     <div class="example-contents"> <div class="phpcode"><code><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$serialized_object</span><span style="color: #007700">=</span><span style="color: #DD0000">'O:1:"a":1:{s:5:"value";s:3:"100";}'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;unserialize_callback_func&nbsp;从&nbsp;PHP&nbsp;4.2.0&nbsp;起可用<br /></span><span style="color: #9876AA">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'unserialize_callback_func'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'mycallback'</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;设置您的回调函数<br /><br /></span><span style="color: #007700">function&nbsp;</span><span style="color: #9876AA">mycallback</span><span style="color: #007700">(</span><span style="color: #9876AA">$classname</span><span style="color: #007700">)&nbsp;<br />{<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;只需包含含有类定义的文件<br />&nbsp;&nbsp;&nbsp;//&nbsp;$classname&nbsp;指出需要的是哪一个类<br /></span><span style="color: #007700">}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </code></div>     </div>     </div>   </p>  </div>    <div class="refsect1 notes" id="refsect1-function.unserialize-notes">   <h3 class="title">注释</h3>   <div class="warning"><strong class="warning">Warning</strong>    <p class="para">     如果反序列化了 <strong><code>FALSE</code></strong> 的值，或者在过程中发生了错误，都会返回 <strong><code>FALSE</code></strong>。     可以通过 <code class="parameter">str</code> 和 <em>serialize(false)</em> 进行比较，或者捕捉 <strong><code>E_NOTICE</code></strong> 错误来判断这种特殊情况。    </p>   </div>  </div>    <div class="refsect1 seealso" id="refsect1-function.unserialize-seealso">   <h3 class="title">参见</h3>   <p class="para">    <ul class="simplelist">     <li class="member"><span class="function">{@link serialize()} - 产生一个可存储的值的表示</span></li>     <li class="member"><a href="http://php.net/manual/zh/language.oop5.autoload.php" class="link">自动加载对象</a></li>     <li class="member"><a href="http://php.net/manual/zh/var.configuration.php#unserialize-callback-func" class="link">unserialize_callback_func</a></li>     <li class="member"><a href="http://php.net/manual/zh/language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a></li>    </ul>   </p>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.var.php">Variable handling 函数</a></div></div>
*/
	public function unserialize($serialized) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes a field from the document
	 * @link http://php.net/manual/en/solrdocument.unset.php
	 * @param string $fieldName <p>
	 * The name of the field.
	 * </p>
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function __unset($fieldName) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Checks if the current position internally is still valid
	 * @link http://php.net/manual/en/solrdocument.valid.php
	 * @return bool <p>
	 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 */
	public function valid() {}

}