{extends file="parent:frontend/detail/comment/form.tpl"}

{* Review author name *}
{block name='frontend_detail_comment_input_name'}
    <input name="sVoteName" type="hidden" value="{s name="DetailCommentInputName"}Anonym{/s}" class="review--field{if $sErrorFlag.sVoteName} has--error{/if}" placeholder="{s name="DetailCommentLabelName"}{/s}*" required="required" aria-required="true" />
{/block}
