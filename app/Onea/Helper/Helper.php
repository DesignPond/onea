<?php
namespace App\Helper;

class Helper{

    public function renderMenu($node)
    {

        $url = 'page/';

        if( $node->isLeaf() )
        {
            return '<li><a href="'.url($url.$node->id).'" title="'.$node->title.'">' . $node->title . '</a></li>';
        }
        else
        {
            $html  = '<li><a href="'.url($url.$node->id).'">' . $node->title .'</a>';
            $html .= '<ul class="sub-menu">';

            foreach($node->children as $child)
                $html .= $this->renderMenu($child);

            $html .= '</ul>';
            $html .= '</li>';
        }

        return $html;
    }

    public function renderMenuSimple($node)
    {
        if( $node->isLeaf() )
        {
            return '<li><a href="'.url('page/'.$node->id).'" title="'.$node->title.'">' . $node->title . '</a></li>';
        }
        else
        {
            $html = '<li><a href="' . url('page/' . $node->id) . '" title="'.$node->title.'">' . $node->title . '</a>';

            if(!$node->children->isEmpty())
            {
                $html .= '<ul class="sub-menu">';

                foreach ($node->children as $child)
                {
                    $html .= $this->renderMenuSimple($child);
                }
                $html .= '</ul>';
            }
            $html .= '</li>';
        }

        return (isset($html) ? $html : '');
    }

}